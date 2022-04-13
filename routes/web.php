<?php

use App\Http\Controllers\NetworkController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/**************************************************************
 *  Web Routes
 **************************************************************/
require __DIR__ . '/auth.php';


Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth', 'verified'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->middleware(['auth', 'verified'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->middleware(['auth', 'verified'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware(['auth', 'verified'])->name('users.edit');
Route::put('/users/{user}/update', [UserController::class, 'update'])->middleware(['auth', 'verified'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->middleware(['auth', 'verified'])->name('users.destroy');

Route::get('/networks', [NetworkController::class, 'index'])->middleware(['auth', 'verified'])->name('networks.index');
Route::get('/networks/create', [NetworkController::class, 'create'])->middleware(['auth', 'verified'])->name('networks.create');
Route::post('/networks', [NetworkController::class, 'store'])->middleware(['auth', 'verified'])->name('networks.store');
Route::get('/networks/{network}', [NetworkController::class, 'show'])->middleware(['auth', 'verified'])->name('networks.show');
Route::get('/networks/{network}/edit', [NetworkController::class, 'edit'])->middleware(['auth', 'verified'])->name('networks.edit');
Route::put('/networks/{network}/update', [NetworkController::class, 'update'])->middleware(['auth', 'verified'])->name('networks.update');
Route::delete('/networks/{network}', [NetworkController::class, 'destroy'])->middleware(['auth', 'verified'])->name('networks.destroy');

Route::get('/join', function () {
    return Inertia::render('Cpa');
})->middleware('guest')->name('cpa');
