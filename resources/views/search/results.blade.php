@extends('layouts.app')

@section('contenido')
@extends('components.header')

<body class="bg-gray-50">
    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex items-center space-x-2 text-sm text-gray-500">
                <a href="{{ route('products') }}" class="hover:text-blue-600">Productos</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-gray-900 font-medium">
                    @if($query)
                        Resultados para "{{ $query }}"
                    @else
                        Búsqueda
                    @endif
                </span>
            </nav>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">
                    @if($query)
                        Resultados para "{{ $query }}"
                    @else
                        Explora Nuestros Productos
                    @endif
                </h1>
                <p class="text-gray-600 mt-2">
                    {{ $productos->total() }} producto(s) encontrado(s)
                    @if($categoria)
                        en {{ $categorias->where('id', $categoria)->first()->name ?? 'categoría seleccionada' }}
                    @endif
                </p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50 active:bg-blue-50 active:border-blue-500">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Advanced Filters -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-lg p-6 sticky top-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-filter mr-2 text-blue-600"></i>
                        Filtros Avanzados
                    </h2>
                    
                    <form method="GET" action="{{ route('search') }}" class="space-y-6">
                        <!-- Search -->
                        <div>
                            <label for="q" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-search mr-1"></i>Buscar Producto
                            </label>
                            <input type="text" 
                                   id="q" 
                                   name="q" 
                                   value="{{ $query }}"
                                   placeholder="Nombre del producto..."
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="categoria" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-tags mr-1"></i>Categoría
                            </label>
                            <select id="categoria" 
                                    name="categoria" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Todas las categorías</option>
                                @foreach($categorias as $cat)
                                    <option value="{{ $cat->id }}" {{ $categoria == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Price Range -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-dollar-sign mr-1"></i>Rango de Precio
                            </label>
                            <div class="grid grid-cols-2 gap-3">
                                <input type="number" 
                                       name="min_price" 
                                       value="{{ $minPrice }}"
                                       placeholder="Mín"
                                       class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <input type="number" 
                                       name="max_price" 
                                       value="{{ $maxPrice }}"
                                       placeholder="Máx"
                                       class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <!-- Sort -->
                        <div>
                            <label for="sort" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-sort mr-1"></i>Ordenar por
                            </label>
                            <select id="sort" 
                                    name="sort" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="name" {{ $sort == 'name' ? 'selected' : '' }}>Nombre A-Z</option>
                                <option value="price_low" {{ $sort == 'price_low' ? 'selected' : '' }}>Precio: Menor a Mayor</option>
                                <option value="price_high" {{ $sort == 'price_high' ? 'selected' : '' }}>Precio: Mayor a Menor</option>
                                <option value="newest" {{ $sort == 'newest' ? 'selected' : '' }}>Más Recientes</option>
                                <option value="popular" {{ $sort == 'popular' ? 'selected' : '' }}>Más Populares</option>
                            </select>
                        </div>

                        <!-- Quick Filters -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                <i class="fas fa-bolt mr-1"></i>Filtros Rápidos
                            </label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" name="in_stock" value="1" class="mr-2">
                                    <span class="text-sm text-gray-600">Solo en Stock</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="on_sale" value="1" class="mr-2">
                                    <span class="text-sm text-gray-600">En Oferta</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="free_shipping" value="1" class="mr-2">
                                    <span class="text-sm text-gray-600">Envío Gratis</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex space-x-3">
                            <button type="submit" 
                                    class="flex-1 bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
                                <i class="fas fa-search mr-1"></i>Aplicar
                            </button>
                            <a href="{{ route('search') }}" 
                               class="flex-1 bg-gray-200 text-gray-700 py-3 px-4 rounded-lg hover:bg-gray-300 transition-colors duration-200 text-center font-medium">
                                <i class="fas fa-times mr-1"></i>Limpiar
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Popular Categories -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Categorías Populares</h3>
                    <div class="space-y-2">
                        @foreach($categorias->take(5) as $cat)
                            <a href="{{ route('search', ['categoria' => $cat->id]) }}" 
                               class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                                <span class="text-sm text-gray-600">{{ $cat->name }}</span>
                                <i class="fas fa-chevron-right text-xs text-gray-400"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Results -->
            <div class="lg:col-span-3">
                @if($productos->count() > 0)
                    <!-- Results Header -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center space-x-4">
                            <span class="text-sm text-gray-600">
                                Mostrando {{ $productos->firstItem() }}-{{ $productos->lastItem() }} de {{ $productos->total() }} productos
                            </span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-600">Vista:</span>
                            <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                <i class="fas fa-th-large"></i>
                            </button>
                            <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                        @foreach($productos as $producto)
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
                        {{ $productos->appends(request()->query())->links() }}
                    </div>
                @else
                    <!-- No Results -->
                    <div class="text-center py-16">
                        <div class="w-32 h-32 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-search text-6xl text-gray-400"></i>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-600 mb-4">No se encontraron productos</h2>
                        <p class="text-gray-500 mb-8 max-w-md mx-auto">
                            @if($query)
                                No encontramos productos que coincidan con "{{ $query }}". 
                                Intenta con otros términos de búsqueda o ajusta los filtros.
                            @else
                                No hay productos disponibles con los filtros seleccionados.
                            @endif
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('search') }}" 
                               class="inline-flex items-center space-x-2 bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 text-lg font-semibold">
                                <i class="fas fa-refresh"></i>
                                <span>Ver Todos los Productos</span>
                            </a>
                            <a href="{{ route('products') }}" 
                               class="inline-flex items-center space-x-2 bg-gray-600 text-white px-8 py-4 rounded-lg hover:bg-gray-700 transition-colors duration-200 text-lg font-semibold">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Explorar Productos</span>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
@endsection