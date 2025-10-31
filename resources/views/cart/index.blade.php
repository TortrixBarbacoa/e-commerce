@extends('layouts.app')

@section('contenido')
@extends('components.header')

<body class="bg-gray-50">
    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex items-center space-x-2 text-sm text-gray-500">
                <a href="{{ route('products') }}" class="hover:text-blue-600">Productos</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-gray-900 font-medium">Carrito de Compras</span>
            </nav>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Carrito de Compras</h1>
                <p class="text-gray-600 mt-2">Revisa tus productos antes de proceder al pago</p>
            </div>
            <a href="{{ route('products') }}" class="flex items-center space-x-2 text-blue-600 hover:text-blue-800 transition-colors duration-200">
                <i class="fas fa-arrow-left"></i>
                <span>Continuar Comprando</span>
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ session('error') }}
            </div>
        @endif

        @if($cartItems->count() > 0)
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Cart Items -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="px-6 py-4 bg-gray-50 border-b">
                            <h2 class="text-xl font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-shopping-cart mr-2 text-blue-600"></i>
                                Productos en tu carrito ({{ $cartItems->count() }})
                            </h2>
                        </div>
                        
                        <div class="divide-y divide-gray-200">
                            @foreach($cartItems as $item)
                                <div class="p-6 hover:bg-gray-50 transition-colors duration-200">
                                    <div class="flex items-center space-x-4">
                                        <!-- Product Image -->
                                        <div class="flex-shrink-0">
                                            <img src="{{ $item->producto->image_url }}" 
                                                 alt="{{ $item->producto->name }}" 
                                                 class="w-20 h-20 object-cover rounded-lg shadow-md">
                                        </div>
                                        
                                        <!-- Product Info -->
                                        <div class="flex-1 min-w-0">
                                            <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $item->producto->name }}</h3>
                                            <p class="text-sm text-gray-500 mb-2">{{ $item->producto->categoria->name }}</p>
                                            <div class="flex items-center space-x-4">
                                                <span class="text-lg font-semibold text-blue-600">Q.{{ number_format($item->price, 2) }}</span>
                                                <span class="text-sm text-gray-500">c/u</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Quantity Controls -->
                                        <div class="flex items-center space-x-3">
                                            <form action="{{ route('cart.update', $item) }}" method="POST" class="flex items-center">
                                                @csrf
                                                @method('PUT')
                                                <button type="button" onclick="decreaseQuantity({{ $item->id }})" 
                                                        class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300 transition-colors duration-200">
                                                    <i class="fas fa-minus text-sm"></i>
                                                </button>
                                                <input type="number" 
                                                       name="quantity" 
                                                       value="{{ $item->quantity }}" 
                                                       min="1" 
                                                       max="{{ $item->producto->stock }}"
                                                       class="w-16 text-center border border-gray-300 rounded-lg mx-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                       onchange="updateQuantity({{ $item->id }}, this.value)">
                                                <button type="button" onclick="increaseQuantity({{ $item->id }})" 
                                                        class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300 transition-colors duration-200">
                                                    <i class="fas fa-plus text-sm"></i>
                                                </button>
                                            </form>
                                        </div>
                                        
                                        <!-- Total Price -->
                                        <div class="text-right">
                                            <p class="text-xl font-bold text-gray-900">Q.{{ number_format($item->total, 2) }}</p>
                                            <form action="{{ route('cart.remove', $item) }}" method="POST" class="mt-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="text-red-600 hover:text-red-800 text-sm transition-colors duration-200">
                                                    <i class="fas fa-trash mr-1"></i>Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Coupon Code -->
                    <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Código de Descuento</h3>
                        <div class="flex space-x-4">
                            <input type="text" 
                                   placeholder="Ingresa tu código de descuento" 
                                   class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                Aplicar
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 sticky top-4">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-receipt mr-2 text-blue-600"></i>
                            Resumen del Pedido
                        </h2>
                        
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal:</span>
                                <span class="font-semibold">Q.{{ number_format($total, 2) }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Descuento:</span>
                                <span class="font-semibold text-green-600">-Q.0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Envío:</span>
                                <span class="font-semibold text-green-600">Gratis</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Impuestos:</span>
                                <span class="font-semibold">Q.{{ number_format($total * 0.12, 2) }}</span>
                            </div>
                            <hr class="border-gray-200">
                            <div class="flex justify-between text-xl font-bold">
                                <span>Total:</span>
                                <span class="text-blue-600">Q.{{ number_format($total * 1.12, 2) }}</span>
                            </div>
                        </div>

                        <a href="{{ route('checkout.index') }}" 
                           class="w-full bg-blue-600 text-white py-4 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 text-center block font-semibold text-lg">
                            <i class="fas fa-credit-card mr-2"></i>
                            Proceder al Pago
                        </a>
                        
                        <div class="mt-4 text-center">
                            <p class="text-sm text-gray-500 mb-2">Métodos de pago aceptados:</p>
                            <div class="flex justify-center space-x-2">
                                <i class="fab fa-cc-visa text-2xl text-blue-600"></i>
                                <i class="fab fa-cc-mastercard text-2xl text-red-600"></i>
                                <i class="fas fa-money-bill-wave text-2xl text-green-600"></i>
                            </div>
                        </div>
                        
                        <form action="{{ route('cart.clear') }}" method="POST" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="w-full bg-gray-200 text-gray-700 py-3 px-4 rounded-lg hover:bg-gray-300 transition-colors duration-200">
                                <i class="fas fa-trash mr-2"></i>
                                Vaciar Carrito
                            </button>
                        </form>
                    </div>

                    <!-- Security Badges -->
                    <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Compra Segura</h3>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-shield-alt text-green-600"></i>
                                <span class="text-sm text-gray-600">SSL Encriptado</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-lock text-green-600"></i>
                                <span class="text-sm text-gray-600">Datos Protegidos</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-undo text-green-600"></i>
                                <span class="text-sm text-gray-600">30 días de devolución</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- Empty Cart -->
            <div class="text-center py-16">
                <div class="w-32 h-32 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-shopping-cart text-6xl text-gray-400"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-600 mb-4">Tu carrito está vacío</h2>
                <p class="text-gray-500 mb-8 max-w-md mx-auto">Agrega algunos productos increíbles para comenzar tu compra y disfrutar de nuestras ofertas especiales.</p>
                <a href="{{ route('products') }}" 
                   class="inline-flex items-center space-x-2 bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 text-lg font-semibold">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Explorar Productos</span>
                </a>
            </div>
        @endif
    </div>

    <script>
        function updateQuantity(itemId, quantity) {
            if (quantity < 1) return;
            
            const form = document.querySelector(`form[action*="${itemId}"]`);
            const input = form.querySelector('input[name="quantity"]');
            input.value = quantity;
            form.submit();
        }

        function increaseQuantity(itemId) {
            const input = document.querySelector(`input[name="quantity"][onchange*="${itemId}"]`);
            const currentValue = parseInt(input.value);
            const maxValue = parseInt(input.max);
            
            if (currentValue < maxValue) {
                updateQuantity(itemId, currentValue + 1);
            }
        }

        function decreaseQuantity(itemId) {
            const input = document.querySelector(`input[name="quantity"][onchange*="${itemId}"]`);
            const currentValue = parseInt(input.value);
            
            if (currentValue > 1) {
                updateQuantity(itemId, currentValue - 1);
            }
        }
    </script>
</body>
@endsection
