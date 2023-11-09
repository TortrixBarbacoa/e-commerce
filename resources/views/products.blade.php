@extends('layouts.app')

@push('styles')
    <!-- Asegúrate de incluir el link o script de FontAwesome en la sección 'head' -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush

@section('contenido')
    @extends('components.header')

    <body>
        <!-- Ofertas Destacadas -->
        <div class="flex flex-col w-full bg-red mt-16 content-center align-middle justify-between px-12 mb-24">
            <h2 class="text-4xl font-poppins font-bold text-blue-700 capitalize text-left mb-6">Ofertas Destacadas</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-5 ease-in-out mb-3">
                @foreach ($productos as $producto)
                    {{-- Primera Oferta --}}
                    <div class="bg-white shadow rounded overflow-hidden group">
                        <div class="relative">
                            <img src="{{ asset('uploads/'.$producto->imagen) }}" alt="product 1" class="w-full">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                                <a href="{{ route('product.show', ['id' => 1]) }}"class="text-white text-lg w-9 h-8 rounded-full bg-blue-700 flex items-center justify-center hover:bg-gray-800 transition"
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
                                <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-blue-700 transition">{{$producto->name}}</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl text-blue-700 font-semibold">Q.{{$producto->precio}}</p>
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
                @endforeach
            </div>




        </div>

    </body>
@endsection
