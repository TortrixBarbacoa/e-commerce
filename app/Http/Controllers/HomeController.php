<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $productos = Producto::all();
        
        if (Auth::check()) {
            $user = Auth::user();
            // Cargar datos del carrito para usuarios autenticados
            $user->load('cartItems');
            return view('welcome', ['productos' => $productos, 'categorias' => $categorias, 'user' => $user]);
        } else {
            return view('welcome', ['productos' => $productos, 'categorias' => $categorias]);
        }
    }
    
    public function products()
    {
        $categorias = Categoria::all();
        $productos = Producto::all();
        
        if (Auth::check()) {
            $user = Auth::user();
            // Cargar datos del carrito para usuarios autenticados
            $user->load('cartItems');
            return view('products', ['productos' => $productos, 'categorias' => $categorias, 'user' => $user]);
        } else {
            return view('products', ['productos' => $productos, 'categorias' => $categorias]);
        }
    }
}
