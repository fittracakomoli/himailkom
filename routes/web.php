<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/structure', function () {
    return view('structure');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/organization', function () {
    return view('admin.organization');
})->middleware(['auth', 'verified'])->name('organization');

Route::get('/admin/members', function () {
    return view('admin.members');
})->middleware(['auth', 'verified'])->name('members');

Route::get('/admin/programlist', function () {
    return view('admin.programlist');
})->middleware(['auth', 'verified'])->name('programlist');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
