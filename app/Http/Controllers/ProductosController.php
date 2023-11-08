<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\File;

class ProductosController extends Controller
{
    public function show($id) {
        $product = Producto::find($id);
        return view('productos.show', ['producto' => $product]);
    }

    public function __construct()
    {
        $this->middleware(['auth'])->except('show', 'index');
    }

    public function index()
    {
        $productos = Producto::paginate(4);

        return view("dashboard", [
            "productos" => $productos
        ]);
    }

    public function create()
    {
        return view("productos.create");
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            "nombre" => "required|max:255",
            "precio" => "required|numeric",
            "cantidad" => "required|integer",
            "imagen" => "required|image|mimes:jpeg,png,jpg,gif|max:2048"

            
        ]);

        dd($request);

        $imagenPath = $request->file('imagen')->store('public/uploads');
        $imagenNombre = basename($imagenPath);

        Producto::create([
            "nombre" => $request->nombre,
            "precio" => $request->precio,
            "cantidad" => $request->cantidad,
            "imagen" => $imagenNombre,
        ]);

        return redirect()->route("productos.index");
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        $imagenPath = public_path('storage/uploads/' . $producto->imagen);
        if (File::exists($imagenPath)) {
            unlink($imagenPath);
        }

        return redirect()->route("productos.index");
    }

    public function editarProyecto($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
        }

        return view('productos.editar', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "nombre" => "required|max:255",
            "precio" => "required|numeric",
            "cantidad" => "required|integer",
            "imagen" => "image|mimes:jpeg,png,jpg,gif|max:2048"
        ]);

        $producto = Producto::find($id);

        if (!$producto) {
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado.');
        }

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');

        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('public/uploads');
            $imagenNombre = basename($imagenPath);
            $producto->imagen = $imagenNombre;
        }

        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    }
}
