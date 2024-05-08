<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat-datang', function () {
    return view('latihan.selamat');
});

Route::get('/laman-utama', function () {
    return view('latihan.index');
});

// Route::get('/admin/dashboard', function(){
//     return view('dashboard');
// });
