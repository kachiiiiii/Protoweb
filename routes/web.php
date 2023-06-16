<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComposeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;

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
    Route::get('/compose', [ComposeController::class, 'index'])->name('compose.create');
    Route::get('/inbox', [MessagesController::class, 'inbox'])->name('inbox');
    Route::get('/draft', [MessagesController::class, 'draft'])->name('draft');
    Route::get('/sent', [MessagesController::class, 'sent'])->name('sent');
    Route::get('/archive', [MessagesController::class, 'archive'])->name('archive');
    Route::get('/trash', [MessagesController::class, 'trash'])->name('trash');
   
});

require __DIR__.'/auth.php';
