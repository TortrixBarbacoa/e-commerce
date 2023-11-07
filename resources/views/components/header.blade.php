<header class="p-5 border-b bg-gray-200 shadow">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-black">
            <a @auth href="{{ route('registrado', ['user' => $user])}}" @endauth  @guest href="{{route('welcome')}}" @endguest class="text-4xl font-black font-poppins uppercase text-blue-700">UVGStore</a>
        </h1>
        <div class="flex flex-row gap-6 ml-12">
            <a href="{{ route('products') }}" class="flex flex-row items-center">
                <h3 class="font-lato text-lg font-thin text-black"><i class="text-blue-700 mr-1 fa-solid fa-bag-shopping"></i> Productos</h3>
            </a>
            <a href="" class="flex flex-row items-center">
                <h3 class="font-lato text-lg font-thin text-black"><i class="text-blue-700 mr-1 fa-solid fa-bars"></i> Categorías</h3>                
            </a>
            <a href="" class="flex flex-row items-center">
                <h3 class="font-lato text-lg font-thin text-black"><i class="text-blue-700 mr-1 fab fa-apple"></i> Marcas</h3>
            </a>
            <a href="" class="flex flex-row items-center">
                <h3 class="font-lato text-lg font-thin text-black"><i class="text-blue-700 mr-1 fa-solid fa-tags"></i> Ofertas</h3>
            </a>
        </div>

        @auth
            <nav class="flex gap-1 items-center">
                @if ($user->role_id === 2)
                    
                <a class="flex flex-col items-center mx-2" href="">
                    <img src="{{ asset('img/carrito-de-compras.svg') }}" alt="Carrito" class="w-6 h-6">
                    <span class="font-medium text-lg capitalize font-lato text-gray-600">Carrito</span>
                </a>
                @else
                <a class="flex flex-col items-center mx-2" href="{{route('dashboard', ['user' => $user])}}">
                    <img src="{{ asset('img/hogar.svg') }}" alt="Login" class="w-6 h-6">
                    <span class="font-medium text-lg capitalize font-lato text-gray-600">Dashboard</span>
                </a>
                @endif
                {{-- Arreglar el diseño  --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf {{-- token de autenticacion --}}
                    <button class="flex flex-col items-center mx-2" type="submit">

                        <img src="{{ asset('img/salida.svg') }}" alt="Login" class="w-6 h-6">
                        <span class="font-medium text-lg capitalize font-lato text-gray-600">Cerrar Sesión</span>

                    </button>
                </form>
            </nav>
        @endauth
        @guest
            <nav class="flex flex-row items-center">
                
                <div class="flex flex-row gap-1">
                    <a class="flex flex-row items-center mx-2 gap-2" href="{{ route('login') }}">
                        <i class="fa-solid fa-user text-xl"></i>
                        <span class="font-medium text-lg capitalize font-lato text-gray-600">Login</span>
                    </a>
                    <a class="flex flex-row items-center mx-2 gap-2" href="{{ route('register') }}">
                        <i class="fa-solid fa-right-to-bracket text-xl"></i>
                        <span class="font-medium text-lg capitalize font-lato text-gray-600">Registrarse</span>
                    </a>
                </div>
            </nav>
        @endguest



    </div>
</header>
