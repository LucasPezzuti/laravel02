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
// Rutas Actores
// Route::get('actores', 'ActoresController@index')->name('actores.index');
// Route::get('actores/create','ActoresController@create')->name('actores.create');
// Route::get('actores/{actor}', 'ActoresController@show')->name('actores.show');
// Route::get('actores/{actor}/edit', 'ActoresController@edit')->name('actores.edit');
// Route::put('actores/{actor}', 'ActoresController@update')->name('actores.update');
// Route::post('actores', 'ActoresController@store')->name('actores.store');
// Route::delete('actores/{actor}', 'ActoresController@destroy')->name('actores.destroy');

Route::resource('actores', 'ActoresController',['parameters' => ['actores' => 'actor']]);


Route::resource('generos', 'GenerosController');
