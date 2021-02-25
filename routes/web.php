<?php

use Illuminate\Support\Facades\Route;

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
/*
Esercizio: create un nuovo progetto Laravel, 
con scaffolding auth, come visto insieme stamattina.
Create un'entità Post, relazionata all'entità User.
Non è necessario completare la crud del post, 
è importante almeno fare una rotta protetta da autenticazione 
(es: la index della CRUD) e una pubblica/aperta a tutti 
(es: la pagina elenco del Blog).
*/
Route::prefix('admin') //prefisso della rotta
    ->namespace('Admin') //namespace sottocartelle controller
    ->middleware('auth') // filtro per autenticazioni non si può cambiare
    ->name('admin.') //prefisso di tutti i nomi delle rotte
    ->group(function(){
        Route::get('/', 'HomeController@index');
        Route::resource('posts', 'PostController');
    }
);

// rotta  pubblica

Route::get('/posts', 'PostController@index')->name('posts.index');
