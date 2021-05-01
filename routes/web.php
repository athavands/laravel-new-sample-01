<?php

use Illuminate\Support\Facades\Route;
use App\Models\cr;
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


Route::get('/', [App\Http\Controllers\Sample::class, 'index'])->name('CreateLogin');


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('hm');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sendrequest', [App\Http\Controllers\QuariesController::class, 'request'])->name('sendrequest');

Route::post('/acept', [App\Http\Controllers\QuariesController::class, 'acept'])->name('acept');

Route::get('/success', [App\Http\Controllers\HomeController::class, 'index'])->name('logged');
