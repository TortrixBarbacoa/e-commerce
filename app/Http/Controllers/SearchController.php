<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->get('q');
        $categoria = $request->get('categoria');
        $minPrice = $request->get('min_price');
        $maxPrice = $request->get('max_price');
        $sort = $request->get('sort', 'name');

        $productos = Producto::with('categoria');

        // Búsqueda por texto
        if ($query) {
            $productos->where(function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                  ->orWhere('descripcion', 'like', "%{$query}%");
            });
        }

        // Filtro por categoría
        if ($categoria) {
            $productos->where('categoria_id', $categoria);
        }

        // Filtro por precio
        if ($minPrice) {
            $productos->where('precio', '>=', $minPrice);
        }
        if ($maxPrice) {
            $productos->where('precio', '<=', $maxPrice);
        }

        // Ordenamiento
        switch ($sort) {
            case 'price_low':
                $productos->orderBy('precio', 'asc');
                break;
            case 'price_high':
                $productos->orderBy('precio', 'desc');
                break;
            case 'name':
            default:
                $productos->orderBy('name', 'asc');
                break;
        }

        $productos = $productos->paginate(12);
        $categorias = Categoria::all();

        // Obtener usuario autenticado si existe
        $user = Auth::user();

        return view('search.results', compact('productos', 'categorias', 'query', 'categoria', 'minPrice', 'maxPrice', 'sort', 'user'));
    }
}