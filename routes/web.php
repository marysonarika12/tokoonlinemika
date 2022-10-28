<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home', ['nama' => 'Kanti Wilujeng']);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});


Route::get('/latihan', [LatihanController::class, 'index']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
