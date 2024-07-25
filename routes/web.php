<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\ProfileController;



// Override logout route to redirect to login
Route::get('/', function () {
Auth::logout();
return redirect('/login');
})->name('logout');

Route::get('/admin', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Menggunakan middleware RoleMiddleware secara langsung di rute
Route::middleware(['auth', RoleMiddleware::class.':admin'])->group(function () {
    // Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/task', [TugasController::class, 'index'])->name('admin.task');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
