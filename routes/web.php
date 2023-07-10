<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokoOnlineUAS2;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home',[
        "title" => "home",
    ]);
});

Route::get('/tentang', function () {
    return view('tentang',[
        "title" => "Tentang Kami",
    ]);
});

Route::get('/profil', function () {
    return view('toko/profil',[
        "title" => "Profil Toko"
    ]);
});

Route::get('/produk', function () {
    return view('toko/produk',[
        'title' => 'Daftar Produk'
    ]);
});

Route::get('/',[HomeController::class, 'index']);


















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
