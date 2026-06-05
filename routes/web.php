<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::get('/test', function() {
    return Inertia::render('Test/Hello');
});

Route::get('/students', function() {
    return Inertia::render('Students/Students');
});


require __DIR__.'/settings.php';
