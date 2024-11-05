<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\editUserController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\DB;
use App\Models\Proveedor;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UserController;
use Faker\Provider\ar_EG\Company;

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
    $reservas = DB::table('reservas')->get();
    $sales = DB::table('salidas')->get();
    $proveedores = DB::table('proveedores') ->get();
    $clientes = DB::table('clientes')->get();
    $productosReservados = DB::table('productos_reservados')->get();
    $productosEntregados = DB::table('productos_entregados')->get();
    $audits = DB::table('audits')->get();
    
    Route::view('/home', 'home.home', ['posts' => $posts]) -> name('home');
    Route::view('/home/addProduct', 'home.addProduct', ['proveedor' => $proveedores]) -> name('product.add');
    Route::post('/home/addProduct', [HomeController::class, 'addProduct']) -> name('product.post');
    Route::get('/home/producto/{id}', [HomeController::class, 'showProduct']) -> name('product.show');
    Route::get('/home/producto/{id}/edit', [HomeController::class, 'redirectToEdit']) -> name('product.redirect.edit');
    Route::post('/home/producto/{id}/edit', [HomeController::class, 'editProduct']) -> name('product.edit');
    Route::get('/home/producto/{id}/delete', [HomeController::class, 'deleteProduct']) -> name('product.delete');

    Route::get('/reporte-diario', [ReporteController::class, 'diario'])->name('reporte.diario');
    Route::get('/reporte-semanal', [ReporteController::class, 'semanal'])->name('reporte.semanal');
    Route::get('/reporte-mensual', [ReporteController::class, 'mensual'])->name('reporte.mensual');

    Route::view('/reservations', 'reservations.reservation', ['reservas' => $reservas, 'productosReservados' => $productosReservados, 'clientes'=> $clientes, 'posts' => $posts]) -> name('reservations');
    Route::post('/addReservation', [ReservationController::class, 'addReservation']) -> name('reservation.add'); 
    Route::get('/reservations/{id}',  [ReservationController::class, 'viewReservation']) -> name('reservation.show');
    Route::get('/reservations/{id}/edit',  [ReservationController::class, 'redirectToEdit']) -> name('reservation.redirect.edit');
    Route::post('/reservations/{id}/edit',  [ReservationController::class, 'updateProductReservation']) -> name('update.productReservation');
    Route::post('/update-client', [ReservationController::class, 'updateClientReservation'])->name('updateClientReservation');
    Route::delete('/reservas/{reservaId}/productos/{productoId}', [ReservationController::class, 'deleteProductReservation'])->name('deleteProductReservation');
    Route::post('/reservations/update-status/{id}', [ReservationController::class, 'updateStatus'])->name('reservations.updateStatus');

    Route::view('/sales', 'salidas.sales', ['clientes'=> $clientes, 'posts' => $posts, 'sales' => $sales, 'productosEntregados' => $productosEntregados]) -> name('sales');
    Route::get('/sales/{id}',  [SalesController::class, 'viewSales']) -> name('viewSales');    

    Route::get('/profile', [ProfileController::class, 'profile']) -> name('profile');
    Route::get('/config', [ConfigController::class, 'config']) -> name('config');
    Route::get('/editCompany/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('/editCompany/{id}', [CompanyController::class, 'update'])->name('company.update');
    
    Route::get('/incoming', [IncomingController::class, 'incoming']) -> name('incoming');
    Route::view('/incoming/addIncoming', 'entradas.add_incoming',['proveedores' => $proveedores,'posts' => $posts])->name('incoming.addIncoming');
    Route::post('/incoming/addIncoming', [IncomingController::class, 'guardarEntrada'])->name('incoming.post');
    Route::get('/incomings/details/{id}', [IncomingController::class, 'showIncoming'])->name('incomings.show');
    Route::delete('/incomings/delete/{id}', [IncomingController::class, 'destroy'])->name('incomings.delete');
    Route::get('incoming/edit/{id}', [IncomingController::class, 'edit'])->name('incoming.edit');
    Route::post('incoming/edit/{id}', [IncomingController::class, 'updateIncoming'])->name('update.incoming');
    
    Route::get('/editUser', [editUserController::class, 'edituser'])->name('editUser');
    Route::put('/editUser/updateUser', [editUserController::class, 'updateUser'])->name('updateUser');
    Route::get('/changePassword', [editUserController::class, 'changePassword'])->name('changePassword');
    Route::post('/changePassword/updatePassword', [editUserController::class, 'updatePassword'])->name('updatePassword');
    
    Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
    
    Route::get('/proveedores/{id}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
    Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
    Route::post('/proveedores', [ProveedorController::class, 'addProveedor'])->name('proveedor.add');
    Route::put('/proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.update');
    Route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');
    
    Route::get('/clientes', [ClientesController::class, 'showClientes'])->name('clientes.index');
    Route::get('/clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
    Route::post('/clientes/add', [ClientesController::class, 'addCliente'])->name('cliente.add');
    Route::put('/clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

    Route::post('/personas',[ProveedorController::class, 'addPerson'])->name('add.person');
    Route::get('/personas', [ProveedorController::class, 'showPerson'])->name('personas');

    Route::get('/usuarios', [UserController::class, 'showUsuarios'])->name('users.index');
    Route::get('users/editUsers/{id} ', [UserController::class, 'edit'])-> name('edit.users');
    Route::post('users/editUsers/{id}', [UserController::class, 'update'])-> name('update.users');
    Route::get('/users/addUser', [UserController::class, 'user'])->name('users.add');
    Route::post('/users/addUser', [UserController::class, 'addUsers'])->name('users.add');
    Route::post('/usuarios', [UserController::class, 'addUsuario'])->name('usuario.add');
    
   
    

});


