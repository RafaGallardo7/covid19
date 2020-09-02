<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Caso;

use Response;
use Storage;
use App;
use Carbon\Carbon;
use Redirect;
use Image;
use Helpers;
use URL;
use View;
use Auth;
use Session;
use Funciones;

class WebController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }
    

    public function paginaWebPrincipal() {
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last();      
        $ult_fecha_data = Funciones::getUltiFechaData();       
        $provincias = Funciones::getCasosCantones($ult_fecha);        
        
        $titulo = 'Mapa Ecuador';        
        return View::make('welcome',compact('titulo','fechas','ult_fecha','provincias','ult_fecha_data'));
    }
}
