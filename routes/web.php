<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReporteController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/safetyPage', function () {
    return view('safetyPage');
});

Route::get('/registro', [AuthController::class, 'registro']) -> name('registro');
Route::post('/registro', [AuthController::class, 'registroPost']) -> name('registro.post') ;

Route::get('/login', [AuthController::class, 'login']) -> name('login');
Route::post('/login', [AuthController::class, 'loginPost']) -> name('login.post') ;

Route::middleware("auth:usuario") -> group(function(){
    Route::view('/home', 'home') -> name('home');
});

Route::get('/reporte-diario', [ReporteController::class, 'diario'])->name('reporte.diario');
Route::get('/reporte-semanal', [ReporteController::class, 'semanal'])->name('reporte.semanal');
Route::get('/reporte-mensual', [ReporteController::class, 'mensual'])->name('reporte.mensual');
