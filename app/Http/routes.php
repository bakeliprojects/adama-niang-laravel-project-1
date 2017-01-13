<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('acceuil', 'ControllerVendeur');

//Route::get('acceuil.index', 'ControllerVendeur@index');
//Route::get('vendeur', 'ControllerVendeur@create');


Route::get('/', function () {
    return view('welcome');
});

/*
Route::group(['middleware'=>'web'],function(){
	Route::auth();
	Route::get('/home', 'ControllerVendeur@index');
});
*/

Route::auth();

Route::get('/home', 'HomeController@index');

/*Route::get('commande', function(){
	return view('Vues/commande');
});*/

//Route::get('commande', 'ControllerCommande@store');
Route::get('commande', function(){
	return view('Vues/commande');
});

Route::get('commande/liste', function(){
	return view('Vues/listcommande');
});

//Route::get('acceuil.show', 'ControllerVendeur@show');

Route::get('test', function() {
	return view('Vues/test');
});
