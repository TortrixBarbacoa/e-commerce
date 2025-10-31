@extends('layouts.app')

@section('contenido')
    {{-- Componente Header --}}
    @extends('components.header')

    <body class="bg-white">

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
                        rounded-md hover:bg-transparent hover:text-primary transition font-roboto">Compra
                        Ahora <i class="fa-solid fa-caret-right ml-2"></i></a>
                </div>
            </div>
        </div>

        {{-- * Categorías --}}
        <div class="flex flex-col w-full mt-16 content-center align-middle justify-between px-12 mb-24">
            <h2 class="text-4xl font-poppins font-bold text-blue-700 capitalize text-left mb-6">Compra por Categoría</h2>
            <div class="grid grid-cols-3 gap-8 mt-5">
                @foreach ($categorias as $categoria)
                    {{-- Categoría 1 - TV y Video --}}
                    <div class="relative rounded overflow-hidden group">
                        <img src="img//category/Tv.png" alt="category 1" class="w-full">
                        <a href="{{ route('show_category',['categoria'=>$categoria->id]) }}"
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-lato font-medium group-hover:bg-opacity-60 transition">
                            {{$categoria->name}}</a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Ofertas Destacadas -->
        <div class="flex flex-col w-full bg-red mt-16 content-center align-middle justify-between px-12 mb-24">
            <h2 class="text-4xl font-poppins font-bold text-blue-700 capitalize text-left mb-6">Ofertas Destacadas</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-5 ease-in-out mb-3">

                {{-- Primera Oferta --}}
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//products//tv/NanocellTV50.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="{{ route('product.show', ['id' => 1]) }}">
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-blue-700 transition">LG
                                50NANO77SRA 50" NanoCell TV, SMART UHD</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-blue-700 font-semibold">Q3,946.00</p>
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
                        class="block w-full py-1 text-center text-white bg-blue-700 border border-blue-700 rounded-b hover:bg-transparent hover:text-blue-700 transition">AGREGAR
                        AL CARRITO</a>
                </div>
                <!-- 2DA OFERTA -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//products/pcs/Victus15.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-blue-700 transition">
                                Laptop HP Victus 15-fb0100la 15.6" FHD</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-blue-700 font-semibold">Q6,496.00</p>
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
                        class="block w-full py-1 text-center text-white bg-blue-700 border border-blue-700 rounded-b hover:bg-transparent hover:text-blue-700 transition">AGREGAR
                        AL CARRITO</a>
                </div>
                <!-- 3ra OFERTA -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//products/pcs/Ps5st.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-blue-700 transition">
                                Consola PlayStation 5 Standard Edition</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-blue-700 font-semibold">Q6,996.00</p>
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
                        class="block w-full py-1 text-center text-white bg-blue-700 border border-blue-700 rounded-b hover:bg-transparent hover:text-blue-700 transition">AGREGAR
                        AL CARRITO</a>
                </div>
                <!-- 4TA OFERTA -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <div class="relative">
                        <img src="img//products/cellphones/Honormgc5lt.png" alt="product 1" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pt-4 pb-3 px-4">
                        <a href="#">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-blue-700 transition">
                                Honor Magic 5 Lite 256GB, Dual Sim</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-blue-500 font-semibold">Q2,496.00</p>
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
                        class="block w-full py-1 text-center text-white bg-blue-700 border border-blue-700 rounded-b hover:bg-transparent hover:text-blue-700 transition">AGREGAR
                        AL CARRITO</a>
                </div>

            </div>


        </div>
        <x-footer />
    </body>
@endsection
