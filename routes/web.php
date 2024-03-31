<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Browse;
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
});
