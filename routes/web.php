<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/upload', [App\Http\Controllers\UploadController::class, 'index'])->name('upload');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index'])->name('galeri');

?>