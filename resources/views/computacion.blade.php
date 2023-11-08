@extends('layouts.app')

<x-header />

<body class="bg-white">

    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12"
        style="background-image: url('{{ asset('img//backgrounds/banners/banner_computadora.png') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-7xl text-white font-medium mb-4 font-poppins">
                COMPUTACIÓN
            </h1>
        </div>
    </div>

    <!-- Productos -->
    <div class="flex flex-col w-full bg-red mt-16 content-center align-middle justify-between px-12 mb-24">
        <h2 class="text-5xl font-poppins font-bold text-black capitalize text-center mb-2">Computadoras</h2>
        <div class="w-12 h-2 bg-blue-700 self-center mb-8"></div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-5 ease-in-out mb-3">

            <!-- PRIMERA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/pcs/Delllati732gb512gb.png" alt="product 1" class="w-full">
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
                            LAPTOP DELL LATITUDE 7440 CORE I7, 32GB RAM, 512GB SSD, 14", WINDOWS PRO</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q19,999.00</p>
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
                    <img src="img//products/pcs/imacm1.png" alt="product 2" class="w-full">
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
                            iMac con pantalla de 24", procesador Chip M1,Memoria RAM 8GB, Almacenamiento 256GB SSD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q13,999.00</p>
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
                    <img src="img//products/pcs/Laptopaceri7graf2gb16gb512gb.png" alt="product 3" class="w-full">
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
                            Laptop Acer Core i7, tarjeta Grafica de 2GB, 8GB RAM, 512GB SSD, 15.6"</h4>
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
                    <img src="img//products/pcs/Laptopdelli516gb512gb.png" alt="product 4" class="w-full">
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
                            Laptop DELL, procesador Intel Core i5, memoria RAM 16GB, 512GB SSD, pantalla 14", W11 pro</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q13,899.00</p>
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
                    <img src="img//products/pcs/Laptophonormagicbooki58gb512gb.png" alt="product 5" class="w-full">
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
                            Laptop Honor MagicBook de 14", Core i5, RAM 8GB, Almacenamiento 512GB SSD, Windows 10</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q7,499.00</p>
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
                    <img src="img//products/pcs/Laptophpi716gb512gb.png" alt="product 6" class="w-full">
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
                            Laptop HP, procesador Intel Core i7,memoria RAM 16GB, Almacenamiento 512GB SSD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q18,499.00</p>
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
                    <img src="img//products/pcs/Laptophpr716gb1tb.png" alt="product 7" class="w-full">
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
                            Laptop HP, procesador AMD Ryzen 7, memoria RAM 16GB, Almacenamiento 1000GB SSD</h4>
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

            <!-- OCTAVA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/pcs/Laptophuai516gb512gb.png" alt="product 8" class="w-full">
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
                            Laptop HUAWEI, procesador Intel Core i5, memoria RAM 16GB, 512GB SSD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q10,999.00</p>
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
                    <img src="img//products/pcs/Laptoplenovo yoga7i716gb1tb.png" alt="product 9" class="w-full">
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
                            Laptop Lenovo Yoga 7 procesador Intel Core i7, RAM de 16GB, 1TB de estado sólido</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q13,999.00</p>
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
                    <img src="img//products/pcs/Laptoplenyogai58gb512gb.png" alt="product 10" class="w-full">
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
                            Laptop Lenovo Yoga Slim 7, procesador Intel Core i5, RAM de 8GB, 512GB de estado sólido</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q9,499.00</p>
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
                    <img src="img//products/pcs/Macbookairm28gb512gb.png" alt="product 11" class="w-full">
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
                            MACBOOK AIR 15" CHIP M2, MEMORIA RAM 8GB, ALMACENAMIENTO 512GB SSD, SPACE GRAY</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q14,999.00</p>
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
                    <img src="img//products/pcs/Macbookpro13m2.png" alt="product 12" class="w-full">
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
                            MACBOOK PRO 13" CHIP M2, MEMORIA RAM 8GB, ALMACENAMIENDO 512GB SSD, SPACE GRAY</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q14,999.00</p>
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
