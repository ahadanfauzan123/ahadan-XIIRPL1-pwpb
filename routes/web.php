<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\perjalanan_controller;


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
    return view('layout.master');
});
Route::get('/table', function () {
    return view('layout.pompt');
});
// Route::get('/dashboard', function () {
//     return view('test');
// });
Route::get('/input', function () {
    return view('layout.input');
});
Route::get('/register', [user_controller::class, 'halaman_register']);
//[[[[[[[[[[[[[]]]]]]]]]]]]]
Route::post('/simpanUser', [user_controller::class, 'simpan_register']);
Route::post('/simpanInputPerjalanan', [perjalanan_controller::class, 'simpan_perjalanan']);
Route::get('/dashboard', [perjalanan_controller::class, 'index']);
