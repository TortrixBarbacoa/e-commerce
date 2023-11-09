<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\File;

class ProductosController extends Controller
{

        public function __construct()
        {
            $this->middleware(['auth'])->except('show','index');
        }
    public function store(Request $request)
    {
        # Paso 1: Validar el formulario
        $this->validate($request, [
            "name" => "required|max:255",
            "descripcion" => "required",
            "imagen" => "required",
            "precio" => "required",
            "stock" => "required",
        ]);
    
        # Paso 2: Guardar la publicación
        Producto::create([
            "name" => $request->name,
            "descripcion" => $request->descripcion,
            "imagen" => $request->imagen,
            "precio" => $request->precio,
            "stock" => $request->stock,
            "categoria_id" => 1, 
            "estado_id" => 1,
        ]);
    
        # Paso 3: Responder con éxito o fracaso
        return redirect()->route("dashboard", auth()->user()->name);

    }
    
}
