@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush

@section('contenido')
    @extends('components.header')

<body class="bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-4">Descubre Nuestros Productos</h1>
                <p class="text-xl mb-8">La mejor tecnología al mejor precio</p>
                <div class="flex justify-center space-x-4">
                    <div class="bg-white bg-opacity-20 rounded-lg px-6 py-3">
                        <i class="fas fa-shipping-fast mr-2"></i>
                        <span>Envío Gratis</span>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-lg px-6 py-3">
                        <i class="fas fa-shield-alt mr-2"></i>
                        <span>Garantía 1 Año</span>
                    </div>
                    <div class="bg-white bg-opacity-20 rounded-lg px-6 py-3">
                        <i class="fas fa-headset mr-2"></i>
                        <span>Soporte 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="bg-white shadow-sm border-b">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-filter text-blue-600"></i>
                        <span class="font-medium">Filtros:</span>
                    </div>
                    <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Todas las categorías</option>
                        <option>Celulares</option>
                        <option>Computación</option>
                        <option>TV y Video</option>
                    </select>
                    <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Ordenar por</option>
                        <option>Precio: Menor a Mayor</option>
                        <option>Precio: Mayor a Menor</option>
                        <option>Mejor Valorados</option>
                    </select>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">{{ $productos->count() }} productos encontrados</span>
                    <div class="flex items-center space-x-2">
                        <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                            <i class="fas fa-th-large"></i>
                        </button>
                        <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="container mx-auto px-4 py-12">
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
                            @else
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Oferta
                                </span>
                            @endif
                        </div>

                        <!-- Quick Actions -->
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-all duration-300 flex space-x-3">
                                <a href="{{ route('product.show', ['id' => $producto->id]) }}" 
                                   class="bg-white text-gray-800 w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors duration-200"
                                   title="Ver producto">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="bg-white text-gray-800 w-12 h-12 rounded-full flex items-center justify-center hover:bg-red-500 hover:text-white transition-colors duration-200"
                                        title="Agregar a favoritos">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="bg-white text-gray-800 w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors duration-200"
                                        title="Comparar">
                                    <i class="fas fa-balance-scale"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-6">
                        <!-- Category -->
                        <div class="text-sm text-blue-600 font-medium mb-2">
                            {{ $producto->categoria->name }}
                        </div>
                        
                        <!-- Product Name -->
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">
                            {{ $producto->name }}
                        </h3>
                        
                        <!-- Description -->
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ Str::limit($producto->descripcion, 80) }}
                        </p>

                        <!-- Rating -->
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                            <span class="text-sm text-gray-500 ml-2">(4.5)</span>
                        </div>

                        <!-- Price -->
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <span class="text-2xl font-bold text-blue-600">Q.{{ number_format($producto->precio, 2) }}</span>
                                @if($producto->precio > 1000)
                                    <span class="text-sm text-gray-500 line-through ml-2">Q.{{ number_format($producto->precio * 1.2, 2) }}</span>
                                @endif
                                </div>
                            <div class="text-sm text-gray-500">
                                Stock: {{ $producto->stock }}
                            </div>
                        </div>

                        <!-- Add to Cart Button -->
                        @auth
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" 
                                        class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
                                    <i class="fas fa-shopping-cart mr-2"></i>
                                    Agregar al Carrito
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" 
                               class="block w-full bg-gray-600 text-white py-3 px-4 rounded-lg hover:bg-gray-700 transition-colors duration-200 font-medium text-center">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                Iniciar Sesión para Comprar
                            </a>
                        @endauth
                    </div>
                    </div>
                @endforeach
            </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center space-x-2">
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">1</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">2</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">3</button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </nav>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Mantente al día con nuestras ofertas</h2>
            <p class="text-xl mb-8">Recibe notificaciones sobre nuevos productos y descuentos exclusivos</p>
            <div class="max-w-md mx-auto flex">
                <input type="email" 
                       placeholder="Tu correo electrónico" 
                       class="flex-1 px-4 py-3 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-300 text-gray-900">
                <button class="bg-blue-800 px-6 py-3 rounded-r-lg hover:bg-blue-900 transition-colors duration-200">
                    Suscribirse
                </button>
            </div>
        </div>
    </div>
    </body>
@endsection
