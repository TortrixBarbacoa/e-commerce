<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    //
    public function show(Categoria $categoria, User $user)
    {
        $productos = Producto::where("categoria_id", $categoria)->get();
        return view('tv', ['productos'=>$productos,'user'=>$user]);

    }
    
}
