@extends('layouts.app')

<x-header />

<body class="bg-white">

    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12"
        style="background-image: url('{{ asset('img//backgrounds/banners/BANNER  REFRIGEDORAS.png') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-5xl  text-white font-medium mb-4 font-poppins">
                ELECTRODOMÉSTICOS
            </h1>
        </div>
    </div>

    <!-- Productos -->
    <div class="flex flex-col w-full bg-red mt-16 content-center align-middle justify-between px-12 mb-24">
        <h2 class="text-5xl font-poppins font-bold text-black capitalize text-center mb-2">Refrigeradoras</h2>
        <div class="w-12 h-2 bg-blue-700 self-center mb-8"></div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-5 ease-in-out mb-3">

            <!-- PRIMERA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/homefurniture/Frigobar4.3.png" alt="product 1" class="w-full">
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
                            Frigobar de 4.3' cúbicos de capacidad, gris, Frigidaire FRD04G3HPIB</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q2,299.00</p>
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
                    <img src="img//products/homefurniture/Refrifrenchdoorsamsung.png" alt="product 2" class="w-full">
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
                            Refrigeradora French Door, con centro de bebida, BESPOKE de 24' cúbicos. RF24BB62006M, Samsung</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q21,999.00</p>
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
                    <img src="img//products/homefurniture/Refrifrenchdoorsamsung2.png" alt="product 3" class="w-full">
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
                            Refrigeradora French Door, 4 puertas Flex, BESPOKE de 29' cúbicos. Samsung, RF29A967541.</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q32,999.00</p>
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
                    <img src="img//products/homefurniture/Refrifrosthisense.png" alt="product 4" class="w-full">
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
                            Refrigeradora Frost con dispensador de 7' pies cúbicos brutos, 6.3' netos, gris. Hisense RR63D6WGX1.</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q2,699.00</p>
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
                    <img src="img//products/homefurniture/Refrimabetopmount19.png" alt="product 5" class="w-full">
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
                            Refrigeradora Top Mount, 19' cúbicos, dispensador y tecnología Home Energy Saver, Mabe RMS510IAMRX0.</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q7,399.00</p>
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
                    <img src="img//products/homefurniture/Refrisamsung.png" alt="product 6" class="w-full">
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
                            Refrigerador BeSpoke de 13.4', tecnología Digital Inverter, Samsung RR39T740531.</h4>
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

            <!-- SEPTIMA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/homefurniture/Refrisidebysidelg.png" alt="product 7" class="w-full">
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
                            Refrigeradora Side by Side, InstaView™, Craft Ice de 23' cúbicos con Smart ThinQ™, LG LS66SXTC</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q21,999.00</p>
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
                    <img src="img//products/homefurniture/Refrisidelg.png" alt="product 8" class="w-full">
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
                            Refrigeradora Side by Side de 19' cúbicos, color gris. LG, GS51BPP.</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q7,999.00</p>
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
                    <img src="img//products/homefurniture/Refrisidelg2.png" alt="product 9" class="w-full">
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
                            Refrigeradora Side by Side de 26' cúbicos con panel electrónico, General Electric GNM26AETFSS.</h4>
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

            <!-- DECIMA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/homefurniture/Refritopmount2.png" alt="product 10" class="w-full">
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
                            Refrigeradora top mount de 15' cúbicos, con tecnología Xpert Flow, Whirlpool WRJ45AKTWW.</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q5,999.00</p>
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
                    <img src="img//products/homefurniture/Refritopmount9mabe.png" alt="product 11" class="w-full">
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
                            Refrigeradora Top Mount, 9' cúbicos, tecnología Home Energy Saver, Mabe RMA230PVMRG1.</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q4,099.00</p>
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
                    <img src="img//products/homefurniture/Refritwinfrigidaire.png" alt="product 12" class="w-full">
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
                            Refrigeradora Twin Frigidaire Professional de 19' cúbicos con acabado anti-huellas, FPRU19F8WF.</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q27,999.00</p>
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
