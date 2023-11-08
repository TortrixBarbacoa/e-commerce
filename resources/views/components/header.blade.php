<header class="p-5 border-b bg-gray-200 shadow">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-black">
            <a @auth href="{{ route('registrado', ['user' => $user])}}" @endauth  @guest href="{{route('welcome')}}" @endguest class="text-4xl font-black font-poppins uppercase text-blue-700">UVGStore</a>
        </h1>
        <div class="flex flex-row gap-6 ml-12">
            <a href="{{ route('products') }}" class="flex flex-row items-center">
                <h3 class="font-lato text-lg font-thin text-black"><i class="text-blue-700 mr-1 fa-solid fa-bag-shopping"></i> Productos</h3>
            </a>
            <button class="flex flex-row items-center text-gray-900 active:bg-gray-100  hover:bg-gray-100 focus:bg-gray-100 font-medium rounded-md  text-sm text-center dark:text-white " data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" >
               <h3 class="font-lato text-lg font-thin text-black"><i class="text-blue-700 mr-1 fa-solid fa-bars"></i> Categorías</h3>          
            </button>
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


    {{-- MODAL DE PRODUCTOS POR CATEGORÍA --}}
    <div id="crypto-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="crypto-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <!-- Modal header -->
                <div class="px-6 py-4 border-b rounded-t dark:border-blue-700 ">
                    <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                        Categorías de Productos
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4">
                    <ul class="my-4 space-y-3">
                        <li>
                            <a href="{{route('tv')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <i class="fa-solid fa-tv"></i>
                                <span class="flex-1 ml-3 whitespace-nowrap">Tv y Video</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('celulares')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                <span class="flex-1 ml-3 whitespace-nowrap">Celulares</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('computacion')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <i class="fa-solid fa-laptop"></i>
                                <span class="flex-1 ml-3 whitespace-nowrap">Computación</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('electrodomesticos')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <i class="fa-solid fa-blender"></i>                                     
                                <span class="flex-1 ml-3 whitespace-nowrap">Electrodomésticos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('prendas')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <svg height="20" viewBox="0 0 256 256" width="20" xmlns="http://www.w3.org/2000/svg"><title/><g id="fitband-sport-watch"><g><path d="M183.15,78.3c-.03-.05-.05-.1-.08-.14-.15-.24-15.19-24.02-17.1-34.52-1.98-10.86-5.96-33.75-6-33.98A2,2,0,0,0,158,8H98a2,2,0,0,0-1.97,1.66c-.04.23-4.02,23.12-6,33.98-1.91,10.49-16.95,34.28-17.1,34.52-.03.04-.05.09-.08.14A17.885,17.885,0,0,0,70,88v80a17.885,17.885,0,0,0,2.85,9.7c.03.05.05.1.08.14.15.24,15.19,24.02,17.1,34.52,1.98,10.86,5.96,33.75,6,33.98A2,2,0,0,0,98,248h60a2,2,0,0,0,1.97-1.66c.04-.23,4.02-23.12,6-33.98,1.91-10.49,16.95-34.28,17.1-34.52.03-.04.05-.09.08-.14A17.885,17.885,0,0,0,186,168V88A17.885,17.885,0,0,0,183.15,78.3ZM88,182a14.019,14.019,0,0,1-14-14V88A14.019,14.019,0,0,1,88,74h80a14.019,14.019,0,0,1,14,14v80a14.019,14.019,0,0,1-14,14Z"/><path d="M158,106h-2.36a14.774,14.774,0,0,0-3.13-19.49,15.425,15.425,0,0,0-20.62,1.22L128,91.55l-3.89-3.82a15.426,15.426,0,0,0-20.62-1.22A14.774,14.774,0,0,0,100.36,106H98a2,2,0,0,0,0,4h5.89l19.9,19.58a6.037,6.037,0,0,0,8.42,0L152.11,110H158a2,2,0,0,0,0-4Zm-52.75-.27a10.84,10.84,0,0,1,7.73-18.55,11.913,11.913,0,0,1,8.33,3.4l3.89,3.82a3.99,3.99,0,0,0,5.6,0l.68-.67,3.21-3.15a11.573,11.573,0,0,1,15.28-.97,10.779,10.779,0,0,1,.78,16.12l-.27.27H142a1.966,1.966,0,0,0-1.41.59l-1.51,1.5-3.14-12.58a2,2,0,0,0-1.8-1.51,2.048,2.048,0,0,0-1.68.73,2.025,2.025,0,0,0-.32.53L128.65,104H126a1.992,1.992,0,0,0-1.94,1.51l-.56,2.24-3.66-8.54a2,2,0,0,0-3.71.09l-2.52,6.7h-8.09Zm24.15,20.99a1.986,1.986,0,0,1-2.8,0L109.59,110H115a2,2,0,0,0,1.87-1.3l1.25-3.33,4.04,9.42A2,2,0,0,0,124,116a.859.859,0,0,0,.16-.01,1.994,1.994,0,0,0,1.78-1.5l1.62-6.49H130a2.01,2.01,0,0,0,1.86-1.26l1.7-4.25,2.5,10a1.994,1.994,0,0,0,3.35.92l3.42-3.41h3.58Z"/><path d="M156,154H100a2.006,2.006,0,0,0-2,2v6a2.006,2.006,0,0,0,2,2h56a2.006,2.006,0,0,0,2-2v-6A2.006,2.006,0,0,0,156,154Zm-2,6h-4v-2h4Z"/><path d="M156,140H100a2.006,2.006,0,0,0-2,2v6a2.006,2.006,0,0,0,2,2h56a2.006,2.006,0,0,0,2-2v-6A2.006,2.006,0,0,0,156,140Zm-2,6H142v-2h12Z"/><circle cx="142" cy="174" r="2"/><circle cx="128" cy="174" r="2"/><circle cx="114" cy="174" r="2"/></g></g></svg>                                      
                                <span class="flex-1 ml-3 whitespace-nowrap">Prendas Electrónicas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('audifonos')}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <i class="fa-solid fa-headphones"></i>
                                <span class="flex-1 ml-3 whitespace-nowrap">Audífonos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
