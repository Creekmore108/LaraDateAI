<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Browse;
use App\Livewire\UserProfile;
use App\Livewire\ProfilePreferences;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/browse', Browse::class)->name('browse');
    Route::get('/profilepreferences', ProfilePreferences::class)->name('profilepreferences');
    // Route::get('/profile', Profile::class)->name('profile');
    // Route::get('/posts/{id}', \App\Http\Livewire\ShowPost::class);
    // Route::get('/profile/{id}', Profile::class);
    Route::get('/user-profile', UserProfile::class)->name('user-profile');
});
