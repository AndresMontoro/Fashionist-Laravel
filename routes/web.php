<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', 'Navegador@index')->name('index');
Route::get('/peinados', 'Navegador@peinados')->name('peinados');
Route::get('/informacion', 'Navegador@informacion')->name('informacion');
Route::get('/citas', 'Navegador@citas')->name('citas');
Route::get('/faqs', 'Navegador@faqs')->name('faqs');

Route::post('/guardar-cita', 'CitaController@guardar');

Route::get('/admin', 'Admin@admin')->name('admin');
Route::get('/consultar', 'Admin@consultar')->name('consultar');
Route::get('/anadir', 'Admin@anadir')->name('anadir');
Route::get('/eliminar', 'Admin@eliminar')->name('eliminar');
Route::get('/consCitas', 'Admin@consCitas')->name('consCitas');

Route::post('/guardar_usuarios', 'UserController@guardar_usuarios')->name('guardar_usuarios');
Route::get('/eliminar_usuario', 'UserController@eliminar_usuario')->name('eliminar_usuario');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
