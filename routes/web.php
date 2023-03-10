<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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
});

require __DIR__.'/auth.php';



// 9-3,8-2
Route::get('/index', [ReviewController::class, 'index'])->name('index');
Route::get('/reviews/create', [ReviewController::class, 'create']);
// 8-3　詳細画面遷移
Route::get('/reviews/{review}', [ReviewController::class ,'show']);
// 8－4 投稿作成画面

Route::post('/reviews', [ReviewController::class, 'store']);

Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
Route::put('/reviews/{review}', [ReviewController::class, 'update']);
Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/{review}', [BookController::class ,'list']);

Route::post('/books', [BookController::class, 'store']);
Route::get('/categories/create', [CategoryController::class, 'create']);

Route::post('/categories', [CategoryController::class, 'store']);

Route::delete('/reviews/{review}', [ReviewController::class,'delete']);
