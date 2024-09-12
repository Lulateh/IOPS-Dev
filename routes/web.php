<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConfigController;
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

Route::get('/sales', function () {
    return view('sales');
});

Route::middleware("auth:usuario") -> group(function(){
    $posts = DB::table('productos') ->get();
    Route::view('/home', 'home.home', ['posts' => $posts]) -> name('home');
    Route::post('/home', [HomeController::class, 'addProduct']) -> name('product.post') ;
});

Route::get('/reporte-diario', [ReporteController::class, 'diario'])->name('reporte.diario');
Route::get('/reporte-semanal', [ReporteController::class, 'semanal'])->name('reporte.semanal');
Route::get('/reporte-mensual', [ReporteController::class, 'mensual'])->name('reporte.mensual');

Route::get('/profile', [ProfileController::class, 'index']) -> name('profile');

Route::get('/config', [ConfigController::class, 'index']) -> name('config');