<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
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

Route::get('/', HomeController::class);

Route::get('productos', [ProductoController::class, 'index' ]);

Route::get('Sobrenosotros', [ProductoController::class, 'create']);

Route::get('productos/pedido', [ProductoController::class, 'show']);

Route::get('agregar', [ProductoController::class, 'formulario']);

Route::post('productos', [ProductoController::class, 'store'])->name('cursos.store');

/* Route::get('productos/{producto}/{tipo?}', function ($producto,$tipo=null) {
    if($tipo){   
        return "La $producto esta hecha de $tipo";
    }
    else{
        return "Ha seleccionado una $producto";
    }
      
}); */
