
<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <!-- Top bar -->
        <div class="bg-blue-600 text-white py-2 text-sm">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <span><i class="fas fa-phone mr-1"></i> +502 1234-5678</span>
                    <span><i class="fas fa-envelope mr-1"></i> info@uvgstore.com</span>
                </div>
                <div class="flex items-center space-x-4">
                    <span><i class="fas fa-truck mr-1"></i> Envío Gratis en pedidos +Q.500</span>
                    <span><i class="fas fa-shield-alt mr-1"></i> Compra Segura</span>
                </div>
            </div>
        </div>

        <!-- Main header -->
        <div class="py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a @auth href="{{ route('registrado')}}" @endauth @guest href="{{route('welcome')}}" @endguest class="flex items-center space-x-3">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-store text-white text-xl"></i>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900">UVGStore</h1>
                            <p class="text-sm text-gray-500">Tu tienda online de confianza</p>
                        </div>
                    </a>
                </div>

                <!-- Search bar -->
                <div class="flex-1 max-w-2xl mx-8">
                    <form action="{{ route('search') }}" method="GET" class="relative">
                        <div class="flex">
                            <select name="categoria" class="bg-gray-100 border border-gray-300 rounded-l-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Todas las categorías</option>
                                @foreach($categorias as $cat)
                                    @php
                                        $currentCategoria = request('categoria');
                                        $isSelected = false;
                                        
                                        // Manejar tanto objetos como IDs
                                        if (is_object($currentCategoria)) {
                                            $isSelected = $currentCategoria->id == $cat->id;
                                        } else {
                                            $isSelected = $currentCategoria == $cat->id;
                                        }
                                    @endphp
                                    <option value="{{ $cat->id }}" {{ $isSelected ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                            <input type="text" 
                                   name="q" 
                                   placeholder="Buscar productos..." 
                                   class="flex-1 px-4 py-3 border-t border-b border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   value="{{ request('q') }}">
                            <button type="submit" 
                                    class="bg-blue-600 text-white px-6 py-3 rounded-r-lg hover:bg-blue-700 transition duration-200">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- User actions -->
                <div class="flex items-center space-x-6">
                    @auth
                        <!-- Wishlist -->
                        <a href="#" class="relative text-gray-600 hover:text-blue-600 transition duration-200">
                            <i class="fas fa-heart text-xl"></i>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                        </a>

                        <!-- Cart -->
                        <a href="{{ route('cart.index') }}" class="relative text-gray-600 hover:text-blue-600 transition duration-200">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            @if(isset($user) && $user->cart_count > 0)
                                <span class="absolute -top-2 -right-2 bg-blue-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
                                    {{ $user->cart_count }}
                                </span>
                            @endif
                        </a>

                        <!-- User menu -->
                        <div class="relative group">
                            <button class="flex items-center space-x-2 text-gray-600 hover:text-blue-600 transition duration-200">
                                <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-white text-sm"></i>
                                </div>
                                <span class="hidden md:block">{{ $user->name ?? 'Usuario' }}</span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>
                            
                            <!-- Dropdown menu -->
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <div class="py-2">
                                    @if(isset($user) && $user->role_id === 1)
                                        <a href="{{ route('dashboard', ['user' => $user]) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                                        </a>
                                    @else
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-user mr-2"></i>Mi Perfil
                                        </a>
                                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-box mr-2"></i>Mis Pedidos
                                        </a>
                                    @endif
                                    <hr class="my-2">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesión
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
                    
                    @guest
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 transition duration-200">
                                <i class="fas fa-sign-in-alt mr-1"></i>Iniciar Sesión
                            </a>
                            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                                <i class="fas fa-user-plus mr-1"></i>Registrarse
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="border-t border-gray-200 py-3">
            <nav class="flex items-center justify-between">
                <div class="flex items-center space-x-8">
                    <a @auth href="{{ route('products_registrados')}}" @endauth @guest href="{{route('products')}}" @endguest class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 transition duration-200">
                        <i class="fas fa-th-large"></i>
                        <span>Todos los Productos</span>
                    </a>
                    @foreach($categorias as $cat)
                        <a href="{{ route('show_category', $cat) }}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 transition duration-200">
                            <i class="fas fa-tag"></i>
                            <span>{{ $cat->name }}</span>
                        </a>
                    @endforeach
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-200">
                        <i class="fas fa-percent mr-1"></i>Ofertas
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-200">
                        <i class="fas fa-star mr-1"></i>Destacados
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
