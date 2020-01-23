<?php

/*
GOAL: riprendendo il progetto iniziato questa mattina (o iniziando un progetto vuoto se non l'avete fatto), 
installate il necessario per la mail + autenticazione. Dopo aver inserito migration+model+factory+seeder di una entita' 
(eventualmente copiando da uno dei vecchi progetti), presentare la lista di entita' pubblica, mentre la show 
di un elemento + delete solo se loggati. Alla delete inviare anche una mail attraverso il servizio mailtrap visto questa mattina
BONUS: mostrare/nascondere i link alle pagine riservate a utenti loggati in base allo stato dell'utente
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index') -> name('home.index');
// Route::get('/posts/show/{id}', 'MainController@postShow') -> name('post.show');
// Route::get('/posts/show/{id}', 'MainController@postShow') -> name('post.show') -> middleware('auth'); //vers singola auth
Route::get('/posts/show/{id}', 'HomeController@postShow') -> name('post.show');


Route::get('/post/edit/{id}', 'MainController@postEdit') -> name('post.edit');
Route::post('post/edit/{id}', 'MainController@postUpdate') -> name('post.update');
// Route::get('post/delete/{id}', 'MainController@postDelete') -> name('post.delete');
Route::get('post/delete/{id}', 'HomeController@postDelete') -> name('post.delete');


Route::get('/category/edit/{id}', 'MainController@categoryEdit') -> name('category.edit');
Route::post('category/update/{id}', 'MainController@categoryUpdate') -> name('category.update');
Route::get('category/delete/{id}', 'MainController@categoryDelete') -> name('category.delete');

Route::get('/category/post/{id}', 'MainController@categoryPost') -> name('category.post');
Route::post('/category/post/{id}', 'MainController@categoryPostCreate') -> name('category.post.create');

