@extends('layouts.app')

@push('styles')
    <!-- Asegúrate de incluir el link o script de FontAwesome en la sección 'head' -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush

@section('contenido')
    <div class="container mx-auto md:flex my-8">
        <div class="md:w-1/2">
            <img src="{{ asset('img/products/tv/NanocellTV50.png') }}" alt="Imagen del Producto" class="w-full rounded-lg shadow-md border border-gray-200">
            @auth
                <button class="bg-blue-500 hover:bg-blue-600 text-white w-full p-3 rounded-md mt-4 cursor-pointer" id="addToCartButton">Agregar al Carrito</button>
            @endauth
        </div>
        <div class="md:w-1/2 m-1">
            <div class="shadow-lg rounded-lg p-5 dark:bg-white border border-gray-200">
                <h1 class="text-2xl font-semibold text-gray-800">Nombre del Producto</h1>
                <p class="text-lg text-blue-700 font-semibold my-2">Precio: Q6,496.00</p>
                <p class="text-gray-600 my-4">Descripción del Producto</p>
                <div class="mb-4">
                    <div class="flex items-center justify-between border-b border-gray-300 pb-2">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400 mr-1"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <span class="text-gray-600 ml-2">(Número de Reseñas)</span>
                        </div>
                        <div class="text-blue-700 font-semibold text-lg">En Stock</div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection


