<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Symfony\Component\Routing\Router;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);

    Route::get('/users', [AuthController::class, 'users'])->name('users');
    Route::get('/user/create', [AuthController::class, 'createUser']);
    Route::post('/user/create', [AuthController::class, 'storeUser']);
    Route::get('/user/{id}/edit', [AuthController::class, 'editUser'])->name('users.edit');
    Route::post('/user/{id}/edit', [AuthController::class, 'updateUser']);
    Route::get('/user/{id}/delete', [AuthController::class, 'deleteUser']);

    Route::get('/logout', [AuthController::class, 'logout']);
});
