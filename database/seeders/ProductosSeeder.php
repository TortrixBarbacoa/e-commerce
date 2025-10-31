<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear categorías si no existen
        $categorias = [
            ['name' => 'Electrónicos', 'descripcion' => 'Dispositivos electrónicos y gadgets', 'imagen' => 'https://images.unsplash.com/photo-1518717757756-46271a3ec616?w=400&h=300&fit=crop'],
            ['name' => 'Computación', 'descripcion' => 'Laptops, computadoras y accesorios', 'imagen' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=400&h=300&fit=crop'],
            ['name' => 'Celulares', 'descripcion' => 'Smartphones y accesorios móviles', 'imagen' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=400&h=300&fit=crop'],
            ['name' => 'TV y Video', 'descripcion' => 'Televisores y equipos de video', 'imagen' => 'https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?w=400&h=300&fit=crop'],
            ['name' => 'Electrodomésticos', 'descripcion' => 'Electrodomésticos para el hogar', 'imagen' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop'],
            ['name' => 'Ropa y Accesorios', 'descripcion' => 'Ropa, calzado y accesorios', 'imagen' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&h=300&fit=crop']
        ];

        foreach ($categorias as $cat) {
            Categoria::firstOrCreate(
                ['name' => $cat['name']], 
                ['descripcion' => $cat['descripcion'], 'imagen' => $cat['imagen']]
            );
        }

        // Obtener IDs de categorías
        $electronica = Categoria::where('name', 'Electrónicos')->first();
        $computacion = Categoria::where('name', 'Computación')->first();
        $celulares = Categoria::where('name', 'Celulares')->first();
        $tv = Categoria::where('name', 'TV y Video')->first();
        $electro = Categoria::where('name', 'Electrodomésticos')->first();
        $ropa = Categoria::where('name', 'Ropa y Accesorios')->first();

        // Productos con imágenes reales de Unsplash
        $productos = [
            // Celulares
            [
                'categoria_id' => $celulares->id,
                'name' => 'iPhone 15 Pro',
                'descripcion' => 'El iPhone más avanzado con chip A17 Pro y cámara de 48MP. Pantalla Super Retina XDR de 6.1 pulgadas.',
                'imagen' => 'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=400&h=400&fit=crop',
                'precio' => 8999.99,
                'stock' => 15,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $celulares->id,
                'name' => 'Samsung Galaxy S24 Ultra',
                'descripcion' => 'Smartphone premium con S Pen y cámara de 200MP. Pantalla Dynamic AMOLED 2X de 6.8 pulgadas.',
                'imagen' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=400&h=400&fit=crop',
                'precio' => 7999.99,
                'stock' => 12,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $celulares->id,
                'name' => 'Google Pixel 8 Pro',
                'descripcion' => 'Smartphone Android con IA avanzada y cámara de 50MP. Pantalla LTPO OLED de 6.7 pulgadas.',
                'imagen' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=400&h=400&fit=crop',
                'precio' => 6999.99,
                'stock' => 18,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $celulares->id,
                'name' => 'OnePlus 12',
                'descripcion' => 'Smartphone flagship con Snapdragon 8 Gen 3 y carga rápida de 100W.',
                'imagen' => 'https://images.unsplash.com/photo-1601972602288-d1cfe37be6b4?w=400&h=400&fit=crop',
                'precio' => 5999.99,
                'stock' => 20,
                'estado_id' => 3
            ],

            // Computación
            [
                'categoria_id' => $computacion->id,
                'name' => 'MacBook Pro 16"',
                'descripcion' => 'Laptop profesional con chip M3 Pro y pantalla Liquid Retina XDR de 16.2 pulgadas.',
                'imagen' => 'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400&h=400&fit=crop',
                'precio' => 12999.99,
                'stock' => 8,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $computacion->id,
                'name' => 'Dell XPS 15',
                'descripcion' => 'Laptop ultrabook con procesador Intel i7 y pantalla 4K OLED de 15.6 pulgadas.',
                'imagen' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=400&h=400&fit=crop',
                'precio' => 8999.99,
                'stock' => 10,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $computacion->id,
                'name' => 'HP Spectre x360',
                'descripcion' => 'Laptop convertible 2-en-1 con pantalla táctil 4K y procesador Intel i7.',
                'imagen' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=400&h=400&fit=crop',
                'precio' => 7999.99,
                'stock' => 12,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $computacion->id,
                'name' => 'ASUS ROG Strix',
                'descripcion' => 'Laptop gaming con RTX 4070 y procesador AMD Ryzen 9. Pantalla 15.6" 144Hz.',
                'imagen' => 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=400&h=400&fit=crop',
                'precio' => 10999.99,
                'stock' => 6,
                'estado_id' => 3
            ],

            // TV y Video
            [
                'categoria_id' => $tv->id,
                'name' => 'Samsung QLED 65"',
                'descripcion' => 'Smart TV 4K QLED con tecnología Quantum Dot y procesador Neural Quantum 4K.',
                'imagen' => 'https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?w=400&h=400&fit=crop',
                'precio' => 5999.99,
                'stock' => 6,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $tv->id,
                'name' => 'LG OLED 55"',
                'descripcion' => 'Smart TV OLED 4K con tecnología OLED evo y procesador α9 AI Processor Gen6.',
                'imagen' => 'https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?w=400&h=400&fit=crop',
                'precio' => 4999.99,
                'stock' => 8,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $tv->id,
                'name' => 'Sony BRAVIA 75"',
                'descripcion' => 'Smart TV 4K HDR con procesador X1 Ultimate y tecnología Cognitive Processor XR.',
                'imagen' => 'https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?w=400&h=400&fit=crop',
                'precio' => 7999.99,
                'stock' => 4,
                'estado_id' => 3
            ],

            // Electrónicos
            [
                'categoria_id' => $electronica->id,
                'name' => 'AirPods Pro 2',
                'descripcion' => 'Audífonos inalámbricos con cancelación activa de ruido y audio espacial.',
                'imagen' => 'https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?w=400&h=400&fit=crop',
                'precio' => 899.99,
                'stock' => 25,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $electronica->id,
                'name' => 'PlayStation 5',
                'descripcion' => 'Consola de videojuegos de nueva generación con SSD ultra rápido y ray tracing.',
                'imagen' => 'https://images.unsplash.com/photo-1606144042614-b2417e99c4e3?w=400&h=400&fit=crop',
                'precio' => 3999.99,
                'stock' => 5,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $electronica->id,
                'name' => 'Xbox Series X',
                'descripcion' => 'Consola gaming más potente con 4K gaming y Quick Resume.',
                'imagen' => 'https://images.unsplash.com/photo-1621259182978-fbf93132d53d?w=400&h=400&fit=crop',
                'precio' => 3999.99,
                'stock' => 7,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $electronica->id,
                'name' => 'Apple Watch Series 9',
                'descripcion' => 'Smartwatch con chip S9, pantalla Always-On Retina y GPS.',
                'imagen' => 'https://images.unsplash.com/photo-1434493789847-2f02dc6ca35d?w=400&h=400&fit=crop',
                'precio' => 1999.99,
                'stock' => 15,
                'estado_id' => 3
            ],

            // Electrodomésticos
            [
                'categoria_id' => $electro->id,
                'name' => 'Refrigerador Samsung',
                'descripcion' => 'Refrigerador side-by-side con tecnología Twin Cooling Plus y Family Hub.',
                'imagen' => 'https://images.unsplash.com/photo-1571175443880-49e1d25b2bc5?w=400&h=400&fit=crop',
                'precio' => 6999.99,
                'stock' => 4,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $electro->id,
                'name' => 'Lavadora LG',
                'descripcion' => 'Lavadora de carga frontal con tecnología TurboWash y AI Direct Drive.',
                'imagen' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=400&fit=crop',
                'precio' => 2999.99,
                'stock' => 7,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $electro->id,
                'name' => 'Microondas Panasonic',
                'descripcion' => 'Horno microondas con tecnología Inverter y función de convección.',
                'imagen' => 'https://images.unsplash.com/photo-1574269909862-7e1d70bb8078?w=400&h=400&fit=crop',
                'precio' => 899.99,
                'stock' => 12,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $electro->id,
                'name' => 'Aspiradora Dyson',
                'descripcion' => 'Aspiradora inalámbrica con tecnología Cyclone V15 y láser para detectar polvo.',
                'imagen' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=400&fit=crop',
                'precio' => 1999.99,
                'stock' => 8,
                'estado_id' => 3
            ],

            // Ropa y Accesorios
            [
                'categoria_id' => $ropa->id,
                'name' => 'Zapatillas Nike Air Max',
                'descripcion' => 'Zapatillas deportivas con tecnología Air Max y suela de goma duradera.',
                'imagen' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop',
                'precio' => 899.99,
                'stock' => 30,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $ropa->id,
                'name' => 'Chaqueta Adidas',
                'descripcion' => 'Chaqueta deportiva con tecnología ClimaLite y diseño moderno.',
                'imagen' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&h=400&fit=crop',
                'precio' => 599.99,
                'stock' => 20,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $ropa->id,
                'name' => 'Reloj Casio G-Shock',
                'descripcion' => 'Reloj resistente a impactos con múltiples funciones y resistencia al agua.',
                'imagen' => 'https://images.unsplash.com/photo-1523170335258-f5b6c6a445f3?w=400&h=400&fit=crop',
                'precio' => 399.99,
                'stock' => 25,
                'estado_id' => 3
            ],
            [
                'categoria_id' => $ropa->id,
                'name' => 'Mochila The North Face',
                'descripcion' => 'Mochila resistente al agua con múltiples compartimentos y tecnología FlexVent.',
                'imagen' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=400&fit=crop',
                'precio' => 699.99,
                'stock' => 15,
                'estado_id' => 3
            ]
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}