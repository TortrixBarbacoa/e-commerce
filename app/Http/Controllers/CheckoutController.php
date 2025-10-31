<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Orden;
use App\Models\Detalles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->with('producto')->get();
        
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Tu carrito está vacío.');
        }

        $total = $cartItems->sum('total');
        $user = Auth::user();
        
        return view('checkout.index', compact('cartItems', 'total', 'user'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'nit' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'payment_method' => 'required|in:efectivo,transferencia,tarjeta'
        ]);

        $cartItems = CartItem::where('user_id', Auth::id())->with('producto')->get();
        
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Tu carrito está vacío.');
        }

        DB::beginTransaction();
        
        try {
            // Crear la orden
            $orden = Orden::create([
                'user_id' => Auth::id(),
                'nit' => $request->nit,
                'address' => $request->address,
                'estado_id' => 1, // Pendiente
                'total' => $cartItems->sum('total')
            ]);

            // Crear los detalles de la orden
            foreach ($cartItems as $cartItem) {
                Detalles::create([
                    'order_id' => $orden->id,
                    'producto_id' => $cartItem->producto_id,
                    'cantidad' => $cartItem->quantity,
                    'subtotal' => $cartItem->total
                ]);

                // Actualizar stock
                $producto = $cartItem->producto;
                $producto->stock -= $cartItem->quantity;
                $producto->save();
            }

            // Limpiar el carrito
            CartItem::where('user_id', Auth::id())->delete();

            DB::commit();

            return redirect()->route('orders.success', $orden->id)
                           ->with('success', '¡Orden procesada exitosamente!');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Error al procesar la orden. Inténtalo de nuevo.');
        }
    }

    public function success($id)
    {
        $orden = Orden::with(['detalle.producto', 'user'])->findOrFail($id);
        $user = Auth::user();
        
        return view('checkout.success', compact('orden', 'user'));
    }
}