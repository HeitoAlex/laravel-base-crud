<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Guest\PageController as GuestPageController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', [GuestPageController::class, 'index'])->name('guest.home');

// Route::get('/', [AnimalController::class, 'index'])->name('pages.animals.index');
// Route::post('/', [AnimalController::class, 'store'])->name('pages.animals.store');
// Route::get('/create', [AnimalController::class, 'create'])->name('pages.animals.create');
// Route::get('/{animal}/edit', [AnimalController::class, 'edit'])->name('pages.animals.edit');
// Route::put('/{animal}', [AnimalController::class, 'update'])->name('pages.animals.update');
// Route::get('/{animal}', [AnimalController::class, 'show'])->name('pages.animals.show');
// Route::delete('/{animal}', [AnimalController::class, 'destroy'])->name('pages.animals.destroy');

Route::resource('/animals', AnimalController::class);
