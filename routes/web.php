<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('users',[UsersController::class,'index'])->name('users.index');
    Route::get('users/{user}',[UsersController::class,'show'])->name('users.show');

    Route::delete('/user/{user}', [UsersController::class,'destroy'])->name('users.destroy');

    Route::get('/users/{user}/edit',[UsersController::class, 'edit'])-> name('users.edit');

    Route::put('/users/{user}',[UsersController::class, 'update'])-> name('users.update');

    Route::get('/create',[UsersController::class, 'create'])-> name('users.create');

    Route::post('/users',[UsersController::class, 'store'])-> name('users.store');
});

require __DIR__.'/auth.php';
