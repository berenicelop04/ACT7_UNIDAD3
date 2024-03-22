<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
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
    return view('welcome');
});
//////
Route::get('/bienvenida', function () {
    return view('bienvenida');
});

Route::get('/vistaprincipal', function () {
    return view('vistaprincipal');
});

/////

//Rutas de google 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('home');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

/////


Auth::routes();

Route::get('/auth/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/login/bienvenida', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/solicitudes', 'SolicitudController@index')->name('solicitudes.index');

Route::get('/solicitudes', [App\Http\Controllers\SolicitudController::class, 'index'])->name('solicitudes.index');


Route::get('/servicios/list', [App\Http\Controllers\ServicioController::class, 'index'])->name('servicios.index');


Auth::routes();
Route::put('/servicios/update/{id}', [App\Http\Controllers\ServicioController::class, 'update'])->name('servicios.update');

Auth::routes();
Route::get('/servicios/edit/{id}', [App\Http\Controllers\ServicioController::class, 'edit'])->name('servicios.edit');

Auth::routes();
Route::delete('/servicios/{servicio}', [App\Http\Controllers\ServicioController::class, 'destroy'])->name('servicios.destroy');

Auth::routes();
Route::get('/servicios/create', [App\Http\Controllers\ServicioController::class, 'create'])->name('servicios.create');

Auth::routes();
Route::post('/servicios/store', [App\Http\Controllers\ServicioController::class, 'store'])->name('servicios.store');

////////

Auth::routes();
Route::put('/solicitudes/update/{id}', [App\Http\Controllers\SolicitudController::class, 'update'])->name('solicitud.update');

Auth::routes();
Route::get('/solicitudes/edit/{id}', [App\Http\Controllers\SolicitudController::class, 'edit'])->name('solicitud.edit');

Auth::routes();
Route::get('/solicitudes/create', [App\Http\Controllers\SolicitudController::class, 'create'])->name('solicitud.create');

Auth::routes();
Route::post('/solicitudes/store', [App\Http\Controllers\SolicitudController::class, 'store'])->name('solicitud.store');

Auth::routes();
Route::delete('/solicitudes/{solicitud}', [App\Http\Controllers\SolicitudController::class, 'destroy'])->name('solicitud.destroy');





