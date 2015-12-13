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
/*
	GET,POST,PUT,DELETE ->RESOURCE
*/

Route::get('/', function () {
    return view('welcome');
    //return view('test.index');
});

Route::group(['prefix' =>'articles'],function(){
	Route::get('view/{id}', [
		'uses' 	=>	'TestController@view',
		'as'	=> 	'articlesView'
		]);
});
// Route::group(['prefix' =>'articles'],function(){
// 	Route::get('view/{article?}', function($article="Vacio"){
// 		echo $article;
// 	});
// });
// Route::get('articles',[
// 	'as'	=>	'articles',
// 	'uses'	=>	'UserController@index'
// 	]);
// Route::get('articles/{name?}',function($name="Usuario"){
// 	echo "Bienvenido ".$name;
// });