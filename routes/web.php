<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

// Página de inicio accesible sin login
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();

// Ruta protegida que redirige a admin o usuario
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rutas de administrador protegidas
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin.dashboard');
});

// Rutas de usuario - ahora pública
Route::get('/user', function () {
    return view('user.index');
})->name('user.public');

