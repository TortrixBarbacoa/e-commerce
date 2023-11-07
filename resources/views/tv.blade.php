@extends('layouts.app')

<x-header />

<body class="bg-white">

    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12"
        style="background-image: url('{{ asset('img//backgrounds/banners/BANNER TV.png') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-9xl text-white font-medium mb-4 font-poppins">
                TV Y VIDEO
            </h1>
        </div>
    </div>

    <!-- Productos -->
    <div class="flex flex-col w-full bg-red mt-16 content-center align-middle justify-between px-12 mb-24">
        <h2 class="text-5xl font-poppins font-bold text-black capitalize text-center mb-2">Televisores</h2>
        <div class="w-12 h-2 bg-blue-700 self-center mb-8"></div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-5 ease-in-out mb-3">

            <!-- PRIMERA CATEGORIA -->
            <div class="bg-white shadow rounded overflow-hidden group">
                <div class="relative">
                    <img src="img//products/tv/LG28TL525D28LED.png" alt="product 1" class="w-full">
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
                            LG 28tl525d 25, Led TV, Basic HD, No Smart</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q2,496.00</p>
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
                    <img src="img//products/tv/LG43UP7700434K.png" alt="product 2" class="w-full">
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
                            LG 43UP7700 43" UHD TV, Smart TV 4K ThinQ AI™</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q2,298.00</p>
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
                    <img src="img//products/tv/LGOLED65C165OLED4K.png" alt="product 3" class="w-full">
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
                            LG OLED65C1 65" OLED TV, Smart TV 4K ThinQ AI™</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q12,998.00</p>
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
                    <img src="img//products/tv/LG43UP7750434K.png" alt="product 4" class="w-full">
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
                            LG 43UP7750 43" UHD TV, Smart TV 4K ThinQ AI™</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q2,998.00</p>
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
                    <img src="img//products/tv/SamsungLT24H315HL24.png" alt="product 5" class="w-full">
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
                            LSamsung LT24H315HL 24" Básico LED TV HD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q1,198.00</p>
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
                    <img src="img//products/tv/SamsungQN65LST7TA65QLEDTV4K.png" alt="product 6" class="w-full">
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
                            Samsung QN65LST7TA 65" Smart QLED TV 4K-Ultra HD Terrace</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q29,998.00</p>
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
                    <img src="img//products/tv/SamsungUN43AU8000434K.png" alt="product 7" class="w-full">
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
                            Samsung UN43AU8000 43" Smart LED TV 4K-Ultra HD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q3,298.00</p>
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
                    <img src="img//products/tv/SamsungQN82Q800TA82QLED8K.png" alt="product 8" class="w-full">
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
                            Samsung QN82Q800TA 82" Smart QLED TV 8K-Ultra HD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q69,999.00</p>
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
                    <img src="img//products/tv/SamsungUN50BU8200504K.png" alt="product 9" class="w-full">
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
                            Samsung UN50BU8200 50" Smart LED TV 4K-Ultra HD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q4,998.00</p>
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
                    <img src="img//products/tv/SamsungUN70AU7000704K.png" alt="product 10" class="w-full">
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
                            Samsung UN50AU7000 50" Smart LED TV 4K-Ultra HD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q3,998.00</p>
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
                    <img src="img//products/tv/SonyKD55X80J554K.png" alt="product 11" class="w-full">
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
                            Sony KD55X80J 55" Smart (GoogleTV) LED TV 4K-Ultra HD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q6,998.00</p>
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
                    <img src="img//products/tv/XiaomiL55M6 554K.png" alt="product 12" class="w-full">
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
                            Xiaomi L43M6 43" Smart LED TV 4K-Ultra HD</h4>
                    </a>
                    <div class="flex items-baseline mb-1 space-x-2">
                        <p class="text-xl text-blue-700 font-semibold">Q2,998.00</p>
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
