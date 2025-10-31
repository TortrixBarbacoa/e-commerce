<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowCategoryController extends Controller
{
    //
    public function show(Categoria $categoria)
    {
        $productos = Producto::where("categoria_id", $categoria->id)
                           ->with('categoria')
                           ->get();
        
        if (Auth::check()) {
            $user = Auth::user();
            $user->load('cartItems');
            return view('tv', [
                'productos' => $productos,
                'user' => $user,
                'categoria' => $categoria
            ]);
        } else {
            return view('tv', [
                'productos' => $productos,
                'categoria' => $categoria
            ]);
        }
    }
    
}
