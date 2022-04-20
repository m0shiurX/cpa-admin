<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NetworkController;

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

Route::get('/members', [MemberController::class, 'index'])->middleware(['auth', 'verified'])->name('members.index');
Route::get('/members/create', [MemberController::class, 'create'])->middleware(['auth', 'verified'])->name('members.create');
Route::post('/members', [MemberController::class, 'store'])->middleware(['auth', 'verified'])->name('members.store');
Route::get('/members/{member}', [MemberController::class, 'show'])->middleware(['auth', 'verified'])->name('members.show');
Route::get('/members/{member}/edit', [MemberController::class, 'edit'])->middleware(['auth', 'verified'])->name('members.edit');
Route::put('/members/{member}/update', [MemberController::class, 'update'])->middleware(['auth', 'verified'])->name('members.update');
Route::delete('/members/{member}', [MemberController::class, 'destroy'])->middleware(['auth', 'verified'])->name('members.destroy');

Route::get('/join', function () {
    return Inertia::render('Join');
})->middleware('guest')->name('join');
Route::get('/profile', function () {
    return Inertia::render('Profile');
})->middleware('auth', 'verified')->name('profile');
