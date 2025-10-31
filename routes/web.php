<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ShowCategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//RUTEO A VISTAS
/* Route::get('/products', function () { return view('/products');})->name('products');
 */
Route::get('/tv', function () {return view('/tv');})->name('tv');

Route::get('/electrodomesticos', function () {return view('/electrodomesticos');})->name('electrodomesticos');

Route::get('/celulares', function () {return view('/celulares');})->name('celulares');

Route::get('/computacion', function () {return view('/computacion');})->name('computacion');

Route::get('/prendas', function () {return view('/prendas');})->name('prendas');

Route::get('/audifonos', function () {return view('/audifonos');})->name('audifonos');

Route::get('productos/create', function () {return view('productos/create');})->name('create');

Route::get('/', [HomeController::class, 'index']) ->name('welcome');

Route::get('/products', [HomeController::class, 'products']) ->name('products');

Route::get('/products-registrados', [HomeController::class, 'products']) ->name('products_registrados');

//RUTAS DE BÚSQUEDA
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/categoria/{categoria:id}', [ShowCategoryController::class, 'show']) ->name('show_category');



//RUTAS PARA AUTENTUCACIÓN
Route::get('/register',[RegisterController::class, 'index'])->name('register');

Route::post('/register',[RegisterController::class, 'store'])->name('register');

Route::post('/logout',[LogoutController::class, 'store']) ->name('logout');

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class, 'store']) ->name('login');

Route::get('/registrado', [HomeController::class, 'index']) ->name('registrado');

//OTRAS RUTAS
Route::get('/producto/{id}', [ProductosController::class, 'show'])->name('product.show');

Route::get('/Dashboard/{user:name}', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/Dashboard/{user:name}/users', [DashboardController::class, 'detailsUser'])->name('detallesUser');

Route::get('/Dashboard/{user:name}/productos', [DashboardController::class, 'detailsProducto'])->name('detallesProducto');

Route::get('/Dashboard/{user:name}/ordens', [DashboardController::class, 'detailsOrden'])->name('detallesOrdens');

Route::get('/Dashboard/{user:name}/categoria', [DashboardController::class, 'detailsCategoria'])->name('detallesCategoria');

//Ruteo para subir un Imagenes
Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');
//Ruta para crear Nuevo Producto
Route::post("/productos", [ProductosController::class, "store"])->name("productos.store");

//RUTAS DEL CARRITO
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::put('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');
    
    //RUTAS DE CHECKOUT
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/orders/{id}/success', [CheckoutController::class, 'success'])->name('orders.success');
});