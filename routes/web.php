<?php

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

// KONSEP 1: BASIC ROUTING & KONSEP 4: NAMED ROUTE
// Route dasar untuk halaman utama. Diberi nama 'home' agar mudah dipanggil.
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route untuk menampilkan daftar semua artikel.
Route::get('/articles', function () {
    // Data dummy sebagai contoh
    $articles = [
        1 => 'Tutorial Laravel 11 untuk Pemula',
        2 => 'Apa yang Baru di PHP 8.3?',
        3 => 'Konsep MVC dalam Pengembangan Web'
    ];
    return view('articles.index', ['articles' => $articles]);
})->name('articles.index');


// KONSEP 2: ROUTER PARAMETERS (Wajib)
// Menampilkan detail artikel berdasarkan {id}.
Route::get('/articles/{id}', function ($id) {
    return view('articles.show', ['id' => $id]);
})->name('articles.show');


// KONSEP 3: OPTIONAL PARAMETERS
// Route untuk pencarian. {keyword} tidak wajib diisi.
Route::get('/search/{keyword?}', function ($keyword = null) {
    return view('search', ['keyword' => $keyword]);
})->name('search');


// KONSEP 4: ROUTE GROUP
    // Route sederhana di dalam group
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // Route group di dalam group dengan prefix 'admin'
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // KONSEP 5: IMPLEMENTASI "RESOURCE" SECARA MANUAL (TANPA CONTROLLER)

        // Menampilkan semua kategori (Index)
        Route::get('/categories', function () {
            return view('admin.categories.index');
        })->name('categories.index');

        // Menampilkan form tambah kategori (Create)
        Route::get('/categories/create', function () {
            return view('admin.categories.create');
        })->name('categories.create');

        // Menampilkan detail satu kategori (Show)
        Route::get('/categories/{id}', function ($id) {
            return view('admin.categories.show', ['id' => $id]);
        })->name('categories.show');
    });
