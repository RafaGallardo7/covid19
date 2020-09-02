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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/login',['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm'])->name('login');
Route::post('/login',['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WebController@paginaWebPrincipal')->name('main-web');


Route::get('/mundo/datos1', 'CasosController@mundoDatos1')->name('mundo-datos1');
Route::get('/mundo/datos2', 'CasosController@mundoDatos2')->name('mundo-datos2');

Route::get('/ecuador/datos1', 'CasosController@ecuadorDatos1')->name('ecuador-datos1');
Route::get('/ecuador/datos2', 'CasosController@ecuadorDatos2')->name('ecuador-datos2');
Route::get('/ecuador/datos3', 'CasosController@ecuadorDatos3')->name('ecuador-datos3');
Route::get('/ecuador/datos4', 'CasosController@ecuadorDatos4')->name('ecuador-datos4');
Route::get('/ecuador/datos5', 'CasosController@ecuadorDatos5')->name('ecuador-datos5');
Route::get('/ecuador/datos6', 'CasosController@ecuadorDatos6')->name('ecuador-datos6');
Route::get('/ecuador/datos7', 'CasosController@ecuadorDatos7')->name('ecuador-datos7');
Route::get('/ecuador/datos8', 'CasosController@ecuadorDatos8')->name('ecuador-datos8');

Route::get('/ecuador/region/{region}', 'CasosController@regionDatos')->name('ecuador-region');
Route::get('/ecuador/provincia/{provincia}', 'CasosController@provinciaDatos')->name('ecuador-provincia');
Route::get('/ecuador/canton/{canton}', 'CasosController@cantonDatos')->name('ecuador-canton');


Route::group(['middleware' => 'auth'], function () {
    // AdvancedRoute::controller('/casos', 'CasosController');   
    
    Route::get('/casos', 'CasosController@getLlenarCasos')->name('casos-covid19');
    Route::post('/casos', 'CasosController@postLlenarCasos')->name('casos-covid19');

    Route::get('/duplicar', 'CasosController@postDuplicarCasos')->name('duplicar-casos');


    Route::get('/casos-todos', 'CasosController@getCasosTodos')->name('casos-todos');
    Route::get('/caso/{casoId}', 'CasosController@getVerCaso')->name('ver-caso');
    
});

