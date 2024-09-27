<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPurchaseController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;

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

//Vista principal
Route::get('/', HomeController::class); 

//Vista de empleados
Route::controller(EmployeeController::class)->group(function() {
    Route::get('/employees', 'index');
    Route::get('/employees/create', 'create');
    Route::get('/employees/{employee}', 'show');
});

//Vista de productos
Route::controller(ProductController::class)->middleware('auth')->group(function() {
    Route::get('/products', 'index');
    Route::get('/products/create', 'create');
    Route::get('/products/{product}', 'show');
});

//Vista de proveedores
Route::controller(SupplierController::class)->group(function() {
    Route::get('/suppliers', 'index');
    Route::get('/suppliers/create', 'create');
    Route::get('/suppliers/{supplier}', 'show');
});

//Vista de compras
Route::controller(PurchaseController::class)->group(function() {
    Route::get('/purchases', 'index');
    Route::get('/purchases/create', 'create');
    Route::get('/purchases/{purchase}', 'show');
});

//Vista de relación productos -> compras
Route::controller(ProductPurchaseController::class)->group(function() {
    Route::get('/productsPurchases', 'index');
    Route::get('/productsPurchases/create', 'create');
    Route::get('/productsPurchases/{productPurchase}', 'show');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
