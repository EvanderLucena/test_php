<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos', 'ProdutoController');
Route::resource('categorias', 'CategoriaController');

Route::get('/', function () {
    return view('welcome');
})->name('inicial');

Route::get('sobre', function () {
    return view('sobre');
})->name('sobre');

Route::get('dev', function () {
    return view('dev');
})->name('dev');
