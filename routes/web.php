<?php

use App\Http\Controllers\CustomRegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Livewire\Administrador\HomeAdminComponent;
use App\Livewire\Administrador\Hotel\HotelComponent;
use App\Livewire\RegistrarHotelComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'create'])->name('home');

// Ruta para procesar la solicitud de registro de administradores
Route::get('/register', [CustomRegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [CustomRegisteredUserController::class, 'store']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');
    Route::get('/homeAdmin', HomeAdminComponent::class)->name('homeAdmin');
    Route::get('/hotel', HotelComponent::class)->name('hotel');

    Route::get('/registrar-hotel', [RegistrarHotelComponent::class, 'create'])->name('registrar-hotel');
    Route::post('/registrar-hotel', [RegistrarHotelComponent::class, 'store']);
});
