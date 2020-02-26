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
    $nombre = "Facundo";
    $array = ["peras","bananas"];

    return view("home",compact(['nombre','array']));
});

Route::post('/', function () {
    return "me mandaste algo";
});

Route::get('/quien-soy/{nombre?}', function ($nombre=null) {
    if($nombre){

        return "soy $nombre";
    } else {
        return "no se quien sos";
    }
});

Route::get('peliculas/{id?}', function ($id=null) {
    $peliculas = [
        'Hulk','Thor','Batman'
    ];

    if($id){
        $pelicula = $peliculas[$id];
        return view('detallePelicula',compact('pelicula'));
    } else {
        return view('peliculas',compact('peliculas'));
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
