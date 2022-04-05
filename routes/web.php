<?php

use App\Http\Controllers\LibroController;
use App\Models\Libro;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;



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

Route::get('/', function () {
    return view('index');
});

/*Route::get('/index', function () {
    return view('index');
});*/

Route::resource('/libros', LibroController::class);

Route::get('/all', [LibroController::class, 'all']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('index');
})->name('dashboard');


Route::get('enviar-reporte/{user}', [LibroController::class, 'enviarNotificacion'])->name('contacto');

//Envio de form para administradores
Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');