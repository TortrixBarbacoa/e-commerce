<x-header/>

<body class=" bg-background">
    
    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12" style="background-image: url('{{ asset('img//backgrounds/banner-bg.jpg') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-6xl text-white font-medium mb-4 font-poppins capitalize">
                ¡Descubre!
            </h1>
            <p class="text-white font-roboto font-medium">Los mejores precios ¡Solo aquí!</p>
            <div class="mt-12">
                <a href="#" class="bg-primary border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-primary">Compra ahora</a>
            </div>
        </div>
    </div>

</body>