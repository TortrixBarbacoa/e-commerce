@extends('layouts.app')

<x-header />

<body class="bg-white">

    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12"
        style="background-image: url('{{ asset('img//backgrounds/banner_bg2.jpg') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-6xl text-white font-medium mb-4 font-poppins">
                PRENDAS ELECTRONÍCAS
            </h1>
        </div>
    </div>

</body>