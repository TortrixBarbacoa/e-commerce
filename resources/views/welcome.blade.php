@extends('layouts.app')

@section('contenido')
    @extends('layouts.header')

    <body class=" bg-background">

        {{-- * Banner --}}
        {{-- Fondo Banner --}}
        <div class="bg-cover bg-no-repeat bg-center py-36 pl-12"
            style="background-image: url('{{ asset('img//backgrounds/banner_bg2.jpg') }}');">
            {{-- Contenido Banner --}}
            <div class="flex flex-col container">
                <h1 class="text-8xl text-white font-medium mb-4 font-poppins">
                    iPhone 14
                </h1>
                <p class="text-white font-poppins font-5xl font-thin capitalize">Descúbrelo aquí</p>
                <div class="mt-12">
                    <a href="#"
                        class="hover:bg-white hover:text-black bg-black border border-primary text-white px-8 py-3 font-medium 
                        rounded-md hover:bg-transparent hover:text-primary font-roboto">Compra
                        Ahora <i class="fa-solid fa-caret-right ml-2"></i></a>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full bg-red mt-10 content-center align-middle justify-between px-2 mb-10">
            <h2 class="text-5xl font-bold text-gray-800 capitalize text-center mb-6">Compra por Categoría</h2>
            <div class="grid grid-cols-3 gap-3 mt-5">
                <div class="relative rounded overflow-hidden group">
                    <img src="img//category/Tv.png" alt="category 1" class="w-full">
                    <a href="#"
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Tv
                        y Video</a>
                </div>
                <div class="relative rounded overflow-hidden group">
                    <img src="img//category/catego.png" alt="category 1" class="w-full">
                    <a href="#"
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Celulares</a>
                </div>
                <div class="relative rounded overflow-hidden group">
                    <img src="img//category/laptop.png" alt="category 1" class="w-full">
                    <a href="#"
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Computación</a>
                </div>
                <div class="relative rounded overflow-hidden group">
                    <img src="img//category/refrigeración.png" alt="category 1" class="w-full">
                    <a href="#"
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Refrigeración</a>
                </div>
                <div class="relative rounded overflow-hidden group">
                    <img src="img//category/Prendas_Electrónicas.png" alt="category 1" class="w-full">
                    <a href="#"
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Prendas
                        Electronícas</a>
                </div>
                <div class="relative rounded overflow-hidden group">
                    <img src="img//category/audifonos.png" alt="category 1" class="w-full">
                    <a href="#"
                        class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Audífonos</a>
                </div>
            </div>
        </div>

        <!-- new arrival -->
        <div class="flex flex-col w-full bg-red mt-10 content-center align-middle justify-between px-2 mb-10">
            <h2 class="text-5xl font-bold text-gray-800  mb-6 capitalize text-center">Ofertas estacadas</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//backgrounds/producto1.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-red-500 transition">LG
                                50NANO77SRA 50" NanoCell TV, SMART UHD</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-red-500 font-semibold">Q3,946.00</p>
                            <p class="text-sm text-gray-400 line-through">Q5,299.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent hover:text-red-500 transition">AGREGAR
                        AL CARRITO</a>
                </div>
                <!-- 2DA OFERTA -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//backgrounds/producto2.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-red-500 transition">
                                Laptop HP Victus 15-fb0100la 15.6" FHD</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-red-500 font-semibold">Q6,496.00</p>
                            <p class="text-sm text-gray-400 line-through">Q7,999.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent hover:text-red-500 transition">AGREGAR
                        AL CARRITO</a>
                </div>
                <!-- 3ra OFERTA -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//backgrounds/producto3.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-red-500 transition">
                                Consola PlayStation 5 Standard Edition</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-red-500 font-semibold">Q6,996.00</p>
                            <p class="text-sm text-gray-400 line-through">Q7,499.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent hover:text-red-500 transition">AGREGAR
                        AL CARRITO</a>
                </div>
                <!-- 4TA OFERTA -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//backgrounds/producto4.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-red-500 transition">
                                Honor Magic 5 Lite 256GB, Dual Sim</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-red-500 font-semibold">Q2,496.00</p>
                            <p class="text-sm text-gray-400 line-through">Q2,999.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent hover:text-red-500 transition">AGREGAR
                        AL CARRITO</a>
                </div>
            </div>
        </div>
    </body>
@endsection
@section('footer')
<footer>
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between ml-6">
            <p class="text-white">&copy; E-Commerce - 2023</p>
        </div>
    </div>
</footer>
@endsection
