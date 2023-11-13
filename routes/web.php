<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'indexMain'])->name('indexMain');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/about', [MainController::class, 'about'])->name('about');