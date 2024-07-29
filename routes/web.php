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

// Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
// Route::post('/', [AnimalController::class, 'store'])->name('animals.store');

// Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
// Route::get('/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
// Route::put('/{animal}', [AnimalController::class, 'update'])->name('animals.update');
// Route::get('/{animal}', [AnimalController::class, 'show'])->name('animals.show');
// Route::delete('/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');


Route::get('/animals/deleted', [AnimalController::class, 'deletedIndex'])->name('animals.deleted');
Route::patch('/animals/{animal}/restore', [AnimalController::class, 'restore'])->name('animals.restore');
Route::delete('/animals/{animal}/permanent-delete', [AnimalController::class, 'permanentDelete'])->name('animals.permanent.delete');
Route::resource('/animals', AnimalController::class);
