<?php

use App\Http\Controllers\HomeController;

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


Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "Tentang Kami",
    ]);
});


Route::get('/produk', function () {
    return view('toko/produk', [
        'title' => 'Daftar Produk'
    ]);
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/welcome', [HomeController::class, 'welcome']);

Route::get('/checkout', function () {
    return view('checkout', [
        "title" => "Checkout",
    ]);
});


use App\Http\Controllers\TokoOnlineUAS2;

// $TokoOnlineUAS2 = new TokoOnlineUAS2();
// $response = $TokoOnlineUAS2->showProduk();



Route::prefix('toko')->group(function () {

    Route::get(
        '/admin',
        [TokoOnlineUAS2::class, 'admin']
    );

    Route::get(
        '/detail',
        [TokoOnlineUAS2::class, 'detail']
    );

    Route::group(['middleware' => ['auth']], function () {

        Route::get(
            '/admin',
            [TokoOnlineUAS2::class, 'admin']
        )->name('produk.admin');

        Route::get(
            'create',
            [TokoOnlineUAS2::class, 'create']
        )->name('produk.create');

        Route::get(
            '/profile',
            [TokoOnlineUAS2::class, 'index']
        );

        Route::post(
            '/',
            [TokoOnlineUAS2::class, "store"]
        )->name('produk.store');

        Route::get(
            '/{produk}/edit',
            [TokoOnlineUAS2::class, 'edit']
        )->name('produk.edit');

        Route::delete(
            '/{produk}',
            [TokoOnlineUAS2::class, 'destroy']
        )->name('produk.destroy');

        Route::put(
            '/{produk}',
            [TokoOnlineUAS2::class, 'update']
        )->name('produk.update');
    });
});



use App\Http\Controllers\ProdukController;

Route::prefix('produk')->group(function () {

    Route::get(
        '/NewProduk',
        [ProdukController::class, 'NewProduk']
    )->name('produk.NewProduk');


    // routes/web.php
    Route::get('/produk/{kode}', 'TokoOnlineUAS2@showProduk')->name('produk');

    Route::get('/JenisProduk', [ProdukController::class, 'JenisProduk'])->name('produk.JenisProduk');
});







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
