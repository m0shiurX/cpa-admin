<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

/**************************************************************
 *  Web Routes
 **************************************************************/
require __DIR__ . '/auth.php';


Route::middleware('auth')->group(
    function () {

        Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
        Route::put('/profile/verification', [ProfileController::class, 'verifyMember'])->name('profile.verification');

        Route::get('/report', [ReportController::class, 'showReport'])->name('reports.index');

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::put('/users/{user}/verify', [UserController::class, 'approveMember'])->name('users.verification');

        Route::get('/networks', [NetworkController::class, 'index'])->name('networks.index');
        Route::get('/networks/create', [NetworkController::class, 'create'])->name('networks.create');
        Route::post('/networks', [NetworkController::class, 'store'])->name('networks.store');
        Route::get('/networks/{network}', [NetworkController::class, 'show'])->name('networks.show');
        Route::get('/networks/{network}/edit', [NetworkController::class, 'edit'])->name('networks.edit');
        Route::put('/networks/{network}/update', [NetworkController::class, 'update'])->name('networks.update');
        Route::delete('/networks/{network}', [NetworkController::class, 'destroy'])->name('networks.destroy');

        Route::get('/members', [MemberController::class, 'index'])->name('members.index');
        Route::post('/members', [MemberController::class, 'store'])->name('members.store');
        Route::get('/members/create', [MemberController::class, 'create'])->name('members.create');
        Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');
        Route::get('/members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
        Route::put('/members/{member}/update', [MemberController::class, 'update'])->name('members.update');
        Route::delete('/members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
    }
);


Route::get('/join', function () {
    return Inertia::render('Join');
})->middleware('guest')->name('join');

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('home');


// Images
Route::get('/storage/{path}', [ImagesController::class, 'show'])
    ->where('path', '.*')
    ->name('storage');
