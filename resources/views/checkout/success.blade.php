@extends('layouts.app')

@section('contenido')
@extends('components.header')

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <!-- Success Header -->
            <div class="text-center mb-12">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-4xl text-green-600"></i>
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">¡Pedido Confirmado!</h1>
                <p class="text-xl text-gray-600 mb-2">Tu pedido #{{ $orden->id }} ha sido procesado exitosamente</p>
                <p class="text-gray-500">Recibirás un correo de confirmación en {{ $orden->user->email }}</p>
            </div>

            <!-- Order Details -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                <!-- Order Info -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-receipt mr-3 text-blue-600"></i>
                        Detalles del Pedido
                    </h2>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Número de Pedido:</span>
                            <span class="font-semibold">#{{ $orden->id }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Fecha:</span>
                            <span class="font-semibold">{{ $orden->created_at->format('d/m/Y H:i') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Estado:</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">
                                {{ $orden->estado->name }}
                            </span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Total:</span>
                            <span class="text-xl font-bold text-blue-600">Q.{{ number_format($orden->total, 2) }}</span>
                        </div>
                    </div>
                </div>

                <!-- Shipping Info -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-truck mr-3 text-green-600"></i>
                        Información de Envío
                    </h2>
                    
                    <div class="space-y-4">
                        <div>
                            <span class="text-gray-600 block">Dirección:</span>
                            <span class="font-semibold">{{ $orden->address }}</span>
                        </div>
                        <div>
                            <span class="text-gray-600 block">NIT:</span>
                            <span class="font-semibold">{{ $orden->nit }}</span>
                        </div>
                        <div>
                            <span class="text-gray-600 block">Tiempo estimado:</span>
                            <span class="font-semibold text-green-600">2-3 días hábiles</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Items -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-shopping-bag mr-3 text-purple-600"></i>
                    Productos Pedidos
                </h2>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Producto</th>
                                <th class="text-center py-3 px-4 font-semibold text-gray-700">Cantidad</th>
                                <th class="text-right py-3 px-4 font-semibold text-gray-700">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orden->detalle as $detalle)
                                <tr class="border-b border-gray-100">
                                    <td class="py-4 px-4">
                                        <div class="flex items-center space-x-4">
                                            <img src="{{ $detalle->producto->image_url }}" 
                                                 alt="{{ $detalle->producto->name }}" 
                                                 class="w-16 h-16 object-cover rounded-lg">
                                            <div>
                                                <h3 class="font-semibold text-gray-900">{{ $detalle->producto->name }}</h3>
                                                <p class="text-sm text-gray-500">{{ $detalle->producto->categoria->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center py-4 px-4">
                                        <span class="font-semibold">{{ $detalle->cantidad }}</span>
                                    </td>
                                    <td class="text-right py-4 px-4">
                                        <span class="font-semibold text-gray-900">Q.{{ number_format($detalle->subtotal, 2) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="bg-blue-50 rounded-xl p-8 mb-12">
                <h2 class="text-2xl font-semibold text-blue-900 mb-6 flex items-center">
                    <i class="fas fa-info-circle mr-3"></i>
                    Próximos Pasos
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-blue-900 mb-2">Confirmación por Email</h3>
                        <p class="text-blue-700 text-sm">Recibirás un correo con todos los detalles de tu pedido</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-truck text-white text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-green-900 mb-2">Preparación</h3>
                        <p class="text-green-700 text-sm">Tu pedido será preparado y enviado en 24-48 horas</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-home text-white text-xl"></i>
                        </div>
                        <h3 class="font-semibold text-purple-900 mb-2">Entrega</h3>
                        <p class="text-purple-700 text-sm">Recibirás tu pedido en 2-3 días hábiles</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="text-center space-y-4">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('products') }}" 
                       class="inline-flex items-center justify-center space-x-2 bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 text-lg font-semibold">
                        <i class="fas fa-shopping-bag"></i>
                        <span>Seguir Comprando</span>
                    </a>
                    
                    <a href="#" 
                       class="inline-flex items-center justify-center space-x-2 bg-gray-600 text-white px-8 py-4 rounded-lg hover:bg-gray-700 transition-colors duration-200 text-lg font-semibold">
                        <i class="fas fa-download"></i>
                        <span>Descargar Factura</span>
                    </a>
                </div>
                
                <p class="text-gray-500 text-sm">
                    ¿Tienes alguna pregunta? 
                    <a href="#" class="text-blue-600 hover:underline">Contáctanos</a> 
                    o llama al +502 1234-5678
                </p>
            </div>
        </div>
    </div>
</body>
@endsection