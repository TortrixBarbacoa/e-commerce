@extends('layouts.app')

@section('contenido')
<div class="min-h-screen bg-gray-50">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">
                @if(isset($categoria))
                    {{ $categoria->name }}
                @else
                    Categoría
                @endif
            </h1>
            <p class="text-xl opacity-90">
                @if(isset($categoria))
                    Explora nuestra selección de {{ $categoria->name }}
                @else
                    Descubre nuestros productos
                @endif
            </p>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container mx-auto px-4 py-12">
        @if(isset($productos) && $productos->count() > 0)
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">
                    Productos encontrados: {{ $productos->count() }}
                </h2>
                <p class="text-gray-600">
                    @if(isset($categoria))
                        Mostrando todos los productos de {{ $categoria->name }}
                    @else
                        Todos los productos disponibles
                    @endif
                </p>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach ($productos as $producto)
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <!-- Product Image -->
                    <div class="relative overflow-hidden rounded-t-xl">
                        <img src="{{ $producto->image_url }}" 
                             alt="{{ $producto->name }}" 
                             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300"
                             loading="lazy"
                             onerror="this.src='https://via.placeholder.com/400x400/f3f4f6/6b7280?text=Imagen+No+Disponible'">
                        
                        <!-- Badge -->
                        <div class="absolute top-4 left-4">
                            @if($producto->precio > 5000)
                                <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Premium
                                </span>
                            @elseif($producto->precio > 2000)
                                <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Popular
                                </span>
                            @else
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Oferta
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-500">{{ $producto->categoria->name ?? 'Sin categoría' }}</span>
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-sm text-gray-600 ml-1">4.5</span>
                            </div>
                        </div>
                        
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">
                            {{ $producto->name }}
                        </h3>
                        
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ Str::limit($producto->descripcion, 80) }}
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-blue-600">Q{{ number_format($producto->precio, 2) }}</span>
                            </div>
                            
                            <a href="{{ route('product.show', $producto->id) }}" 
                               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200 text-sm">
                                Ver Detalles
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- No Products Found -->
            <div class="text-center py-16">
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-search text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">No se encontraron productos</h3>
                <p class="text-gray-600 mb-8">
                    @if(isset($categoria))
                        No hay productos disponibles en la categoría "{{ $categoria->name }}" en este momento.
                    @else
                        No hay productos disponibles en este momento.
                    @endif
                </p>
                <a href="{{ route('products') }}" 
                   class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-200">
                    Ver Todos los Productos
                </a>
            </div>
        @endif
    </div>
</div>
@endsection