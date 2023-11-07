@extends('layouts.app')

<x-header />

<body class="bg-white">

    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12"
        style="background-image: url('{{ asset('img//backgrounds/banners/BANNER CELULAR.png') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-9xl text-white font-medium mb-4 font-poppins">
                CELULARES
            </h1>
        </div>
    </div>

    <!-- Productos -->
    <div class="flex flex-col w-full bg-red mt-16 content-center align-middle justify-between px-12 mb-24">
        <h2 class="text-5xl font-poppins font-bold text-black capitalize text-center mb-2">Celulares</h2>
        <div class="w-12 h-2 bg-blue-700 self-center mb-8"></div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-5 ease-in-out mb-3">

            <!-- PRIMERA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Galaxys22black.png" alt="product 1" class="w-full">
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
                            Samsung Galaxy S22 5G, Dual SIM, Liberado (Negro)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q8,299.00</p>
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

            <!-- SEGUNDA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Galaxys23ultrablack.png" alt="product 2" class="w-full">
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
                            Samsung Galaxy S23 Ultra Tera, Dual SIM, Liberado (Negro)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q15,999.00</p>
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

            <!-- TERCERA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Galaxyzfoldblack.png" alt="product 3" class="w-full">
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
                            Samsung Galaxy ZFold 256GB, Dual sim, Liberado (Negro)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q15,996.00</p>
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


            <!-- CUARTA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Huamate50problack.png" alt="product 4" class="w-full">
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
                            Huawei Mate 50 Pro, Dual SIM, Liberado 256GB (Negro)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q11,999.00</p>
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

            <!-- QUINTA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Huamate50proor.png" alt="product 5" class="w-full">
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
                            Huawei Mate 50 Pro, Dual SIM, 512GB, Liberado (Naranja)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q12,999.00</p>
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

            <!-- SEXTA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Huanova9seskyblue.png" alt="product 6" class="w-full">
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
                            Huawei Nova 9 Se, Dual SIM, Liberado (Azul)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q2,199.00</p>
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

            <!-- SEPTIMA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/iPhone13blue.png" alt="product 7" class="w-full">
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
                            Apple iPhone 13 5G, 256GB, Liberado (Azul)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q10,299.00</p>
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

            <!-- OCTAVA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/iPhone14red.png" alt="product 8" class="w-full">
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
                            Apple iPhone 14 Plus, 256GB, Liberado (Rojo)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q11,499.00</p>
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


            <!-- NOVENA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/iPhone15PlusBlack.png" alt="product 9" class="w-full">
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
                            Apple iPhone 15 Plus, 128GB, Liberado (Negro)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q9,999.00</p>
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

            <!-- DECIMA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Redminote12problack.png" alt="product 10" class="w-full">
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
                            Xiaomi Redmi Note 12 Pro, 8GB+256GB, Dual SIM, Liberado (Negro)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q3,199.00</p>
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


            <!-- ONCEAVA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Redminote12prowhite.png" alt="product 11" class="w-full">
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
                            Xiaomi Redmi Note 12 Pro, 8GB+256GB, Dual SIM, Liberado (Blanco)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q3,199.00</p>
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

            <!-- DOCEAVA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/cellphones/Xia12tproblack.png" alt="product 12" class="w-full">
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
                            Xiaomi 12T Pro, 8GB+256GB, Dual SIM, Liberado (Negro)</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q6,999.00</p>
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

</body>
