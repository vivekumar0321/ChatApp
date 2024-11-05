<?php

use App\Http\Controllers\DashboardController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

//  Route::get('/dashboard',function(){
//     $users = User::where('id','!=',Auth::user('id'));
//     return view('dashboard',compact('users'));
//  })->middleware(['auth', 'verified'])->name('dashboard'); 

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/chat/{id}', [DashboardController::class, 'chat'])->middleware(['auth', 'verified'])->name('chat');


require __DIR__ . '/auth.php';
