<?php

use App\Http\Controllers\BerandaController;
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

Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');

Route::get('/pesan-tiket', [BerandaController::class, 'pesanTiket'])->name('pesan-tiket');

Route::get('/login', [BerandaController::class, 'login'])->name('login');
