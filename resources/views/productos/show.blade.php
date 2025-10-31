@extends('layouts.app')

@section('contenido')
@extends('components.header')

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    <li><a href="{{ route('products') }}" class="hover:text-blue-600">Productos</a></li>
                    <li class="flex items-center">
                        <i class="fas fa-chevron-right mx-2"></i>
                        <span>{{ $producto->categoria->name }}</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-chevron-right mx-2"></i>
                        <span>{{ $producto->name }}</span>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Imagen del producto -->
                <div class="space-y-4">
                    <div class="aspect-square bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ $producto->image_url }}" 
                             alt="{{ $producto->name }}" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Miniaturas (placeholder) -->
                    <div class="grid grid-cols-4 gap-2">
                        <div class="aspect-square bg-gray-200 rounded-lg"></div>
                        <div class="aspect-square bg-gray-200 rounded-lg"></div>
                        <div class="aspect-square bg-gray-200 rounded-lg"></div>
                        <div class="aspect-square bg-gray-200 rounded-lg"></div>
                    </div>
                </div>

                <!-- Información del producto -->
                <div class="space-y-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $producto->name }}</h1>
                        <p class="text-lg text-gray-600">{{ $producto->categoria->name }}</p>
                    </div>

                    <!-- Precio -->
                    <div class="flex items-baseline space-x-2">
                        <span class="text-4xl font-bold text-blue-600">Q.{{ number_format($producto->precio, 2) }}</span>
                    </div>

                    <!-- Calificaciones -->
                    <div class="flex items-center space-x-2">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-sm text-gray-500">(4.5) - 128 reseñas</span>
                    </div>

                    <!-- Descripción -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Descripción</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $producto->descripcion }}</p>
                    </div>

                    <!-- Stock -->
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-600">Disponibilidad:</span>
                        @if($producto->stock > 0)
                            <span class="text-green-600 font-medium">{{ $producto->stock }} unidades disponibles</span>
                        @else
                            <span class="text-red-600 font-medium">Agotado</span>
                        @endif
                    </div>

                    <!-- Botones de acción -->
                    <div class="space-y-4">
                        @if($producto->stock > 0)
            @auth
                                <form action="{{ route('cart.add') }}" method="POST" class="flex space-x-4">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                    <div class="flex items-center space-x-2">
                                        <label for="quantity" class="text-sm font-medium text-gray-700">Cantidad:</label>
                                        <input type="number" 
                                               id="quantity" 
                                               name="quantity" 
                                               value="1" 
                                               min="1" 
                                               max="{{ $producto->stock }}"
                                               class="w-20 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    </div>
                                    <button type="submit" 
                                            class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-200">
                                        <i class="fas fa-shopping-cart mr-2"></i>
                                        Agregar al Carrito
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" 
                                   class="block w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-200 text-center">
                                    <i class="fas fa-sign-in-alt mr-2"></i>
                                    Iniciar Sesión para Comprar
                                </a>
            @endauth
                        @else
                            <button disabled 
                                    class="w-full bg-gray-400 text-white py-3 px-6 rounded-lg cursor-not-allowed">
                                Producto Agotado
                            </button>
                        @endif

                        <!-- Botón de favoritos -->
                        <button class="w-full bg-gray-200 text-gray-700 py-3 px-6 rounded-lg hover:bg-gray-300 transition duration-200">
                            <i class="fas fa-heart mr-2"></i>
                            Agregar a Favoritos
                        </button>
                    </div>

                    <!-- Información adicional -->
                    <div class="border-t pt-6">
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="font-medium text-gray-900">Envío:</span>
                                <span class="text-gray-600">Gratis en pedidos mayores a Q.500</span>
                            </div>
                            <div>
                                <span class="font-medium text-gray-900">Devolución:</span>
                                <span class="text-gray-600">30 días de garantía</span>
                            </div>
                            <div>
                                <span class="font-medium text-gray-900">Garantía:</span>
                                <span class="text-gray-600">1 año del fabricante</span>
                            </div>
                            <div>
                                <span class="font-medium text-gray-900">Soporte:</span>
                                <span class="text-gray-600">24/7 disponible</span>
        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Productos relacionados -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Productos Relacionados</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    @php
                        $relatedProducts = App\Models\Producto::where('categoria_id', $producto->categoria_id)
                                                           ->where('id', '!=', $producto->id)
                                                           ->limit(4)
                                                           ->get();
                    @endphp
                    
                    @foreach($relatedProducts as $related)
                        <div class="bg-white shadow rounded overflow-hidden group">
                            <div class="relative">
                                <img src="{{ $related->image_url }}" 
                                     alt="{{ $related->name }}" 
                                     class="w-full h-48 object-cover">
                                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                    <a href="{{ route('product.show', ['id' => $related->id]) }}" 
                                       class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                       title="Ver producto">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-4 pb-3 px-4">
                                <a href="{{ route('product.show', ['id' => $related->id]) }}">
                                    <h4 class="uppercase font-medium text-lg mb-2 text-gray-800 hover:text-blue-700 transition">
                                        {{ $related->name }}
                                    </h4>
                                </a>
                                <div class="flex items-baseline mb-1 space-x-2">
                                    <p class="text-xl text-blue-700 font-semibold">Q.{{ number_format($related->precio, 2) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
@endsection