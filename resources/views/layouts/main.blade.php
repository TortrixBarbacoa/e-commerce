<x-header/>

<body class=" bg-background">
    
    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12" style="background-image: url('{{ asset('img//backgrounds/banner_bg2.jpg') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-8xl text-white font-medium mb-4 font-poppins capitalize">
                Descubre
            </h1>
            <p class="text-white font-poppins font-3xl font-light">Los mejores precios</p>
            <div class="mt-12">
                <a href="#" class="hover:bg-white hover:text-black bg-black border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-primary font-roboto">Compra Ahora <i class="fa-solid fa-caret-right ml-2"></i></a>
            </div>
        </div>
    </div>

    <div class="container py-16 align-middle content-center justify-items-center">
        <h2 class="text-2xl font-medium text-white uppercase mb-6">COMPRA POR CATEGORÍA</h2>
        <div class="grid grid-cols-3 gap-3">
            <div class="relative rounded-sm overflow-hidden group">
                <img src="img//category/Tv.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Tv y Video</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="assets/images/category/catego.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Celulares</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="assets/images/category/laptop.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Computación
                </a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="assets/images/category/refrigeración.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Refrigeración</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="assets/images/category/Prendas_Electrónicas.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Prendas Electrónicas</a>
            </div>
            <div class="relative rounded-sm overflow-hidden group">
                <img src="assets/images/category/audifonos.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Audífonos</a>
            </div>
        </div>
    </div>

</body>