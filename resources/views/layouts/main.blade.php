<x-header/>

<body class=" bg-background">
    
    {{-- * Banner --}}
    {{-- Fondo Banner --}}
    <div class="bg-cover bg-no-repeat bg-center py-36 pl-12" style="background-image: url('{{ asset('img//backgrounds/banner_bg2.jpg') }}');">
        {{-- Contenido Banner --}}
        <div class="flex flex-col container">
            <h1 class="text-8xl text-white font-medium mb-4 font-poppins">
                iPhone 14
            </h1>
            <p class="text-white font-poppins font-5xl font-thin capitalize">Descúbrelo aquí</p>
            <div class="mt-12">
                <a href="#" class="hover:bg-white hover:text-black bg-black border border-primary text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-primary font-roboto">Compra Ahora <i class="fa-solid fa-caret-right ml-2"></i></a>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-full bg-red mt-10 content-center align-middle justify-between px-2 mb-10">
        <h2 class="font-poppins text-center text-3xl text-white capitalize">Comprar por Categoría</h2>
        <div class="grid grid-cols-3 gap-3 mt-5">
            <div class="relative rounded overflow-hidden group">
                <img src="img//category/Tv.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Tv y Video</a>
            </div>
            <div class="relative rounded overflow-hidden group">
                <img src="img//category/catego.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Celulares</a>
            </div>
            <div class="relative rounded overflow-hidden group">
                <img src="img//category/laptop.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Computación</a>
            </div>
            <div class="relative rounded overflow-hidden group">
                <img src="img//category/Tv.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Tv y Video</a>
            </div>
            <div class="relative rounded overflow-hidden group">
                <img src="img//category/catego.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Celulares</a>
            </div>
            <div class="relative rounded overflow-hidden group">
                <img src="img//category/laptop.png" alt="category 1" class="w-full">
                <a href="#"
                    class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-60 transition">Computación</a>
            </div>
        </div>
    </div>

</body>