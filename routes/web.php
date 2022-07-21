<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassCodeController;
use App\Models\PassCode;

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
    $alert = "";
    $intentos = 0;
    return view('inicio', compact('alert', 'intentos'));
})->name('home');

Route::get(
    '/generar',
    [PassCodeController::class, 'create']
)->name('generar');

Route::post('/generar',
    [PassCodeController::class, 'store']
)->name('generar.store');

Route::get('/visualizar',
    [PassCodeController::class, 'index']
)->name('visualizar');

Route::get('/validar', function () {
    $alert = "";
    $intentos = 1;
    return view('validar',compact('alert','intentos'));
})->name('validar');

Route::post(
    '/validar',
    [PassCodeController::class, 'show']
)->name('validar.show');
