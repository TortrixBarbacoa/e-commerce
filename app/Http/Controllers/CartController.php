<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->with('producto')->get();
        $total = $cartItems->sum('total');
        $user = Auth::user();
        
        return view('cart.index', compact('cartItems', 'total', 'user'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $producto = Producto::findOrFail($request->producto_id);
        
        // Verificar stock
        if ($producto->stock < $request->quantity) {
            return back()->with('error', 'No hay suficiente stock disponible.');
        }

        $cartItem = CartItem::where('user_id', Auth::id())
                           ->where('producto_id', $request->producto_id)
                           ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            CartItem::create([
                'user_id' => Auth::id(),
                'producto_id' => $request->producto_id,
                'quantity' => $request->quantity,
                'price' => $producto->precio
            ]);
        }

        return back()->with('success', 'Producto agregado al carrito.');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        // Verificar que el item pertenece al usuario
        if ($cartItem->user_id !== Auth::id()) {
            return back()->with('error', 'No autorizado.');
        }

        // Verificar stock
        if ($cartItem->producto->stock < $request->quantity) {
            return back()->with('error', 'No hay suficiente stock disponible.');
        }

        $cartItem->update(['quantity' => $request->quantity]);

        return back()->with('success', 'Carrito actualizado.');
    }

    public function remove(CartItem $cartItem)
    {
        // Verificar que el item pertenece al usuario
        if ($cartItem->user_id !== Auth::id()) {
            return back()->with('error', 'No autorizado.');
        }

        $cartItem->delete();

        return back()->with('success', 'Producto eliminado del carrito.');
    }

    public function clear()
    {
        CartItem::where('user_id', Auth::id())->delete();
        
        return back()->with('success', 'Carrito vaciado.');
    }
}