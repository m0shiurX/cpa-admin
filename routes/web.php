<?php

use App\Http\Controllers\NetworkController;
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

Route::get('/users', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('users');

Route::get('/networks', [NetworkController::class, 'index'])->middleware(['auth', 'verified'])->name('networks.index');
Route::get('/networks/create', [NetworkController::class, 'create'])->middleware(['auth', 'verified'])->name('networks.create');
Route::post('/networks', [NetworkController::class, 'store'])->middleware(['auth', 'verified'])->name('networks.store');
Route::get('/networks/{network}', [NetworkController::class, 'show'])->middleware(['auth', 'verified'])->name('networks.show');
Route::get('/networks/{network}/edit', [NetworkController::class, 'edit'])->middleware(['auth', 'verified'])->name('networks.edit');
Route::put('/networks/{network}/update', [NetworkController::class, 'update'])->middleware(['auth', 'verified'])->name('networks.update');
Route::delete('/networks/{network}', [NetworkController::class, 'destroy'])->middleware(['auth', 'verified'])->name('networks.destroy');

Route::get('/join', function () {
    return Inertia::render('Cpa');
})->name('cpa');
