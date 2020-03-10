<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::resource('produtos', 'ProdutoController');
Route::resource('categorias', 'CategoriaController');
/*Route::delete('produtos/{id}', 'ProdutoController@destroy')->name('produtos.destroy');
Route::put('produtos/{id}', 'ProdutoController@update')->name('produtos.update');
Route::get('produtos/create', 'ProdutoController@create')->name('produtos.create');
Route::get('produtos/{id}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::get('produtos/{id}', 'ProdutoController@show')->name('produtos.show');
Route::get('produtos', 'ProdutoController@index')->name('produtos.index');
Route::post('produtos', 'ProdutoController@save')->name('produtos.save');*/


Route::get('/', function () {
    return view('welcome');
});
