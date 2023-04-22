<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});