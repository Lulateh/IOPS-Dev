<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\editUserController;
use App\Http\Controllers\ProveedorController;
use App\Models\Proveedor;

use App\Http\Controllers\ForgotPasswordController;
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


Route::get('/forgotPassword', [ForgotPasswordController::class, 'forgotPasswordView'])->name('forgot.password.view');
Route::post('/forgotPassword/checkEmail', [ForgotPasswordController::class, 'checkEmail'])->name('checkEmail');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('password/update', [ForgotPasswordController::class, 'updatePassword'])->name('password.update');



Route::middleware("auth:usuario") -> group(function(){
    Route::post('/logout', [AuthController::class, 'logout']) -> name('logout');
    $posts = DB::table('productos') ->get();
    $incomings = DB::table('entradas')->get();
    
    $proveedores = DB::table('proveedores') ->get();
    $clientes = DB::table('clientes')->get();
    Route::view('/home', 'home.home', ['posts' => $posts]) -> name('home');
    Route::view('/home/addProduct', 'home.addProduct') -> name('product.add');
    Route::post('/home/addProduct', [HomeController::class, 'addProduct']) -> name('product.post');
    Route::get('/home/producto/{id}', [HomeController::class, 'showProduct']) -> name('product.show');
    Route::get('/home/producto/{id}/edit', [HomeController::class, 'redirectToEdit']) -> name('product.redirect.edit');
    Route::get('/home/producto/{id}/delete', [HomeController::class, 'deleteProduct']) -> name('product.delete');
    Route::post('/home/producto/{id}/edit', [HomeController::class, 'editProduct']) -> name('product.edit');
    Route::get('/reporte-diario', [ReporteController::class, 'diario'])->name('reporte.diario');
    Route::get('/reporte-semanal', [ReporteController::class, 'semanal'])->name('reporte.semanal');
    Route::get('/reporte-mensual', [ReporteController::class, 'mensual'])->name('reporte.mensual');
    Route::get('/sales',  [SalesController::class, 'sales'])->name('sales');
    Route::get('/addSales',  [SalesController::class, 'addSales'])->name('addSales');
    Route::get('/editSales',  [SalesController::class, 'editSales'])->name('editSales');
    Route::get('/viewSales',  [SalesController::class, 'viewSales'])->name('viewSales');
    Route::get('/profile', [ProfileController::class, 'profile']) -> name('profile');
    Route::get('/config', [ConfigController::class, 'config']) -> name('config');
    Route::get('/incoming', [IncomingController::class, 'incoming']) -> name('incoming');
    Route::view('/incoming/addIncoming', 'add_incoming',['proveedores' => $proveedores,'posts' => $posts])->name('incoming.addIncoming');
    Route::post('/incoming/addIncoming', [IncomingController::class, 'guardarEntrada'])->name('incoming.post');
    Route::get('/editUser', [editUserController::class, 'edituser'])->name('editUser');
    Route::put('/editUser/updateUser', [editUserController::class, 'updateUser'])->name('updateUser');
    Route::get('/changePassword', [editUserController::class, 'changePassword'])->name('changePassword');
    Route::post('/changePassword/updatePassword', [editUserController::class, 'updatePassword'])->name('updatePassword');

    
    Route::get('/incomings/details/{id}', [IncomingController::class, 'showIncoming'])->name('incomings.show');
    Route::delete('/incomings/delete/{id}', [IncomingController::class, 'destroy'])->name('incomings.delete');
    //Route::view('incoming/edit', 'incomingEdit',['proveedores' => $proveedores,'posts' => $posts])->name('incoming.edit');
    Route::get('incoming/edit/{id}', [IncomingController::class, 'edit'])->name('incoming.edit');
    Route::post('incoming/edit/{id}', [IncomingController::class, 'updateIncoming'])->name('update.incoming');
    
   
    //Route::view('/personas', 'personas.personas', ['proveedores' => $proveedores, 'clientes'=>$clientes]) -> name('personas');
    Route::post('/personas',[ProveedorController::class, 'addPerson'])->name('add.person');
    Route::get('/personas', [ProveedorController::class, 'showPerson'])->name('personas');
    //Route::get('/showPerson', [ProveedorController::class, 'showPerson']);
});


