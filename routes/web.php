<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pp', function () {
    return view('pp');
});

Route::get('/', [ArticleController::class, 'index'])->name('index');

// Route CRUD untuk siswa
Route::middleware('auth')->group(function () {
    Route::prefix('siswa')->name('siswa.')->group(function () {
        Route::get('/', [SiswaController::class, 'tampil'])->name('tampil');
        Route::post('/input', [SiswaController::class, 'input'])->name('input');
        Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [SiswaController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [SiswaController::class, 'delete'])->name('delete');
    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});

// Route CRUD untuk artikel
Route::prefix('articles')->name('articles.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/', [ArticleController::class, 'store'])->name('store');
    Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('edit');
    Route::put('/{article}', [ArticleController::class, 'update'])->name('update');
    Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('destroy');
});
// Route untuk detail artikel berdasarkan slug
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');


require __DIR__ . '/auth.php';
