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
                <a href="{{ route('cart.index') }}" class="hover:text-blue-600">Carrito</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-gray-900 font-medium">Checkout</span>
            </nav>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Finalizar Compra</h1>
                <p class="text-gray-600 mt-2">Completa tu información para procesar el pedido</p>
            </div>
            <a href="{{ route('cart.index') }}" class="flex items-center space-x-2 text-blue-600 hover:text-blue-800 transition-colors duration-200">
                <i class="fas fa-arrow-left"></i>
                <span>Volver al Carrito</span>
            </a>
        </div>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ session('error') }}
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Checkout Form -->
            <div class="lg:col-span-2">
                <form action="{{ route('checkout.process') }}" method="POST" class="space-y-8" id="checkout-form">
                    @csrf
                    
                    <!-- Personal Information -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Información Personal</h2>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nombre Completo</label>
                                <input type="text" 
                                       value="{{ Auth::user()->name }}" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                       readonly>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                                <input type="email" 
                                       value="{{ Auth::user()->email }}" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                       readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Information -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-truck text-white"></i>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Información de Envío</h2>
                        </div>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">NIT / DPI <span class="text-red-500">*</span></label>
                                <input type="text" 
                                       name="nit" 
                                       required
                                       value="{{ old('nit') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                       placeholder="Ingresa tu NIT o DPI">
                                @error('nit')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Dirección de Envío <span class="text-red-500">*</span></label>
                                <textarea name="address" 
                                          rows="3" 
                                          required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                          placeholder="Ingresa tu dirección completa">{{ old('address') }}</textarea>
                                @error('address')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Ciudad</label>
                                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option>Guatemala</option>
                                        <option>Mixco</option>
                                        <option>Villa Nueva</option>
                                        <option>San Miguel Petapa</option>
                                        <option>Santa Catarina Pinula</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Zona</label>
                                    <input type="text" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                           placeholder="Zona">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Código Postal</label>
                                    <input type="text" 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                           placeholder="01001">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center mb-6">
                            <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-credit-card text-white"></i>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">Método de Pago</h2>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="payment_method" value="efectivo" class="sr-only" checked>
                                    <div class="border-2 border-gray-300 rounded-lg p-4 hover:border-blue-500 transition-colors duration-200 payment-option">
                                        <div class="text-center">
                                            <i class="fas fa-money-bill-wave text-3xl text-green-600 mb-2"></i>
                                            <p class="font-medium">Efectivo</p>
                                            <p class="text-sm text-gray-500">Pago contra entrega</p>
                                        </div>
                                    </div>
                                </label>
                                
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="payment_method" value="transferencia" class="sr-only">
                                    <div class="border-2 border-gray-300 rounded-lg p-4 hover:border-blue-500 transition-colors duration-200 payment-option">
                                        <div class="text-center">
                                            <i class="fas fa-university text-3xl text-blue-600 mb-2"></i>
                                            <p class="font-medium">Transferencia</p>
                                            <p class="text-sm text-gray-500">Transferencia bancaria</p>
                                        </div>
                                    </div>
                                </label>
                                
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="payment_method" value="tarjeta" class="sr-only">
                                    <div class="border-2 border-gray-300 rounded-lg p-4 hover:border-blue-500 transition-colors duration-200 payment-option">
                                        <div class="text-center">
                                            <i class="fas fa-credit-card text-3xl text-purple-600 mb-2"></i>
                                            <p class="font-medium">Tarjeta</p>
                                            <p class="text-sm text-gray-500">Visa, Mastercard</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            @error('payment_method')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="terms" required class="mt-1">
                            <label for="terms" class="text-sm text-gray-600">
                                Acepto los <a href="#" class="text-blue-600 hover:underline">términos y condiciones</a> 
                                y la <a href="#" class="text-blue-600 hover:underline">política de privacidad</a> 
                                de UVGStore
                            </label>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-lg p-6 sticky top-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-shopping-bag mr-2 text-blue-600"></i>
                        Resumen del Pedido
                    </h2>
                    
                    <!-- Order Items -->
                    <div class="space-y-4 mb-6">
                        @foreach($cartItems as $item)
                            <div class="flex items-center space-x-3">
                                <img src="{{ $item->producto->image_url }}" 
                                     alt="{{ $item->producto->name }}" 
                                     class="w-12 h-12 object-cover rounded-lg">
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-gray-900 truncate">{{ $item->producto->name }}</h4>
                                    <p class="text-sm text-gray-500">Cantidad: {{ $item->quantity }}</p>
                                </div>
                                <p class="text-sm font-semibold text-gray-900">Q.{{ number_format($item->total, 2) }}</p>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- Order Totals -->
                    <div class="space-y-3 mb-6 border-t pt-4">
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

                    <!-- Place Order Button -->
                    <button type="submit" 
                            form="checkout-form"
                            class="w-full bg-blue-600 text-white py-4 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 text-center font-semibold text-lg mb-4">
                        <i class="fas fa-lock mr-2"></i>
                        Confirmar Pedido
                    </button>
                    
                    <!-- Security Info -->
                    <div class="text-center">
                        <p class="text-sm text-gray-500 mb-2">Compra 100% segura</p>
                        <div class="flex justify-center space-x-2">
                            <i class="fas fa-shield-alt text-green-600"></i>
                            <i class="fas fa-lock text-green-600"></i>
                            <i class="fas fa-credit-card text-green-600"></i>
                        </div>
                    </div>
                </div>

                <!-- Shipping Info -->
                <div class="mt-6 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <i class="fas fa-truck text-blue-600 mr-2"></i>
                        Información de Envío
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-clock text-blue-600"></i>
                            <span class="text-sm text-gray-600">Tiempo de entrega: 2-3 días hábiles</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-shipping-fast text-blue-600"></i>
                            <span class="text-sm text-gray-600">Envío gratis en pedidos +Q.500</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-blue-600"></i>
                            <span class="text-sm text-gray-600">Cobertura en toda Guatemala</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Payment method selection
        document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.payment-option').forEach(option => {
                    option.classList.remove('border-blue-500', 'bg-blue-50');
                    option.classList.add('border-gray-300');
                });
                
                if (this.checked) {
                    this.closest('label').querySelector('.payment-option').classList.remove('border-gray-300');
                    this.closest('label').querySelector('.payment-option').classList.add('border-blue-500', 'bg-blue-50');
                }
            });
        });

        // Form submission
        document.getElementById('checkout-form').addEventListener('submit', function(e) {
            if (!document.getElementById('terms').checked) {
                e.preventDefault();
                alert('Debes aceptar los términos y condiciones');
                return;
            }
        });
    </script>

    <style>
        .payment-option {
            transition: all 0.2s ease;
        }
        
        input[name="payment_method"]:checked + .payment-option {
            border-color: #3B82F6;
            background-color: #EFF6FF;
        }
    </style>
</body>
@endsection