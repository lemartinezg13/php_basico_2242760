<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //accion para mostrar el formulario de busqueda
    public function formulario_buscador(){
        //mostrar la vista del metabuscador
        return view('metabuscador');
    }

    //accion para realizar la busqueda
    public function buscar(){
        //Datos llegan al arreglo $_POST
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];
        //Redireccionar al motor correcto, junto con el termino
        //querystring
        switch($motor){
            case 1:return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2:return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
                case 3:return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 4:return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
                case 5:return redirect()->to("https://duckduckgo.com/?q=$termino");
                    break;
                case 6:return redirect()->to("https://search20.lycos.com/web/?q=$termino");
                    break;
                    case 7:return redirect()->to("https://yandex.com/search/?oprnd=8366393800&text=$termino");
                        break;
                    case 8:return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                        break;
                        case 9:return redirect()->to("https://dialnet.unirioja.es/buscar/documentos?querysDismax.DOCUMENTAL_TODO=$termino");
                            break;
                        case 10:return redirect()->to("https://search.scielo.org/?lang=es&count=15&from=0&output=site&sort=&format=summary&fb=&page=1&q=$termino");
                            break;

        }
    }
}
