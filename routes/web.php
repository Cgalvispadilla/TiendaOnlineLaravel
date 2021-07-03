<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductoController::class, 'index_cliente'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
   
        Route::get('/home/admin', function () {
            return view('admin.index');
        })->name('admin.home');

        Route::get('admin/productos', [ProductoController::class, 'index'])->name('admin/productos');
    
        Route::get('admin/productos/create',[ProductoController::class, 'create'])->name('admin/productos/create');
    
        Route::post('admin/productos/create', [ProductoController::class, 'store'])->name('admin/productos/create');
       
        Route::get('admin/productos/{id}/edit', [ProductoController::class, 'edit'])->name('admin/productos/edit');
        Route::put('admin/productos/{id}/update', [ProductoController::class, 'update'])->name('admin/productos/update');
        Route::delete('admin/productos/{id}', [ProductoController::class, 'destroy'])->name('admin/productos/delete');
    });
});
// que cosas

Route::middleware(['auth:sanctum', 'verified'])->get('/home', [ProductoController::class, 'index_cliente'])->name('dashboard');
Route::get('Contacto',[ContactoController::class, 'index'])->name('contacto');
Route::post('Contacto',[ContactoController::class, 'store'])->name('enviar.mensaje');
