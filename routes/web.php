<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // router category
    Route::group(['prefix' => 'categories', 'as'=> 'category.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/tambah', [CategoryController::class, 'create'])->name('create');
        Route::get('/detail/{category}', [CategoryController::class, 'show'])->name('show');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::put('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/destory/{category}', [CategoryController::class, 'destroy'])->name('destroy');
    });


    // router category
    Route::group(['prefix' => 'products', 'as'=> 'product.'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/tambah', [ProductController::class, 'create'])->name('create');
        Route::get('/detail/{product}', [ProductController::class, 'show'])->name('show');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
        Route::delete('/destory/{product}', [ProductController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__.'/auth.php';

Route::get('/cart', function () {
    // Ganti dengan data keranjang Anda
    $cartItems = [];
    return view('cart', compact('cartItems'));
});
