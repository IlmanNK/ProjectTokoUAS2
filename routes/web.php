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




use App\Http\Controllers\TokoOnlineUAS2;

// $TokoOnlineUAS2 = new TokoOnlineUAS2();
// $response = $TokoOnlineUAS2->showProduk();



Route::prefix('toko')->group(function(){

    Route::get('/admin',
        [TokoOnlineUAS2::class, 'admin']);

    Route::get('/detail',
        [TokoOnlineUAS2::class, 'detail']);

    Route::group(['middleware' => ['auth']], function(){

        Route::get('/admin',
            [TokoOnlineUAS2::class, 'admin'])->name('produk.admin');
        
        Route::get('create',
            [TokoOnlineUAS2::class, 'create'])->name('produk.create');
        
        Route::get('/profile',
            [TokoOnlineUAS2::class, 'index']);
        
        Route::post('/',
            [TokoOnlineUAS2::class, "store"])->name('produk.store');
    
        Route::get('/{produk}/edit',
            [TokoOnlineUAS2::class, 'edit'])->name('produk.edit');
    
        Route::delete('/{produk}',
            [TokoOnlineUAS2::class, 'destroy'])->name('produk.destroy');
    
        Route::put('/{produk}',
            [TokoOnlineUAS2::class, 'update'])->name('produk.update');
    });


});











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
