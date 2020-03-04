<?php
Auth::routes();

Route::get('/', function () {
    $nombre = "Facundo";
    $array = ["peras","bananas"];

    return view("inicio",compact(['nombre','array']));
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

Route::get('actores', 'ActoresController@index')->name('actores.index');
Route::get('actores/{actor}', 'ActoresController@show')->name('actores.show');

Route::resource('generos', 'GenerosController');
