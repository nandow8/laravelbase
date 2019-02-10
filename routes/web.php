<?php


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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('produtos', 'ProdutoController@index')->name('produtos.index');
Route::get('produtos/create', 'ProdutoController@create')->name('produtos.create');
Route::post('produtos/store', 'ProdutoController@store')->name('produtos.store');
Route::get('produtos/{id}/edit', 'ProdutoController@edit')->name('produtos.edit');
Route::post('produtos/{id}', 'ProdutoController@update')->name('produtos.edit');
Route::delete('produtos/{id}', 'ProdutoController@destroy')->name('produtos.destroy');

