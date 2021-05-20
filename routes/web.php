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

//cellback: función sin nombre
//que hace parte de los parametros de invocación de otra
Route::get('variables', function(){
    //JAVA: Fuertemente tipado
    //PHP, JS, PHYTON: Debilmente tipado
    $mensaje=10;
    var_dump($mensaje);
    echo  "<hr />";
    $mensaje="Dilan";
    var_dump($mensaje);
});

Route::get('arreglos', function(){
    $estudiantes = [ "AN" =>  "Ana",
                     "MA" => "Maria",
                     "JO" =>  "Jorge"];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
});
Route::get('paises', function(){
    $paises = [
        "Colombia"=> [
            "Capital" => "Bogotá",
            "Moneda" => "Peso",
            "Poblacion" => 50.34
        ],
        "Peru"=> [
            "Capital" => "Lima",
            "Moneda" => "Soles",
            "Poblacion" => 32.84
        ],
        "Paraguay"=> [
            "Capital" => "Asunción",
            "Moneda" => "Guaraní paraguayo",
            "Poblacion" => 7
        ]
    ];

    //invocar la vista
    //llevando los datos a ella
    return view("paises") ->with("naciones", $paises);

});

Route::get('formulario_buscador', "MetabuscadorController@formulario_buscador");

Route::post('buscar', "MetabuscadorController@buscar");
