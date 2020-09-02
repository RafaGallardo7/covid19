<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Caso;

use Illuminate\Support\Collection as Collection;


// use Request;
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

class CasosController extends Controller {

    
    
    public function mundoDatos1() {
        $ult_fecha = Caso::all()->last();  
        $ult_fecha_data = Funciones::getUltiFechaData();        
        
        $titulo = 'Mapa mundial';
        return View::make('web.datosMundo1',compact('titulo','ult_fecha','ult_fecha_data'));
    }

    public function mundoDatos2() {

    }

    
    public function ecuadorDatos1() {
        $fechas = Caso::all();

        $ult_fecha = Caso::all()->last(); 
        $ult_fecha_data = Funciones::getUltiFechaData();    
        
        // dd($provincias);

        
        // dd($ult_fecha->f_azuay);
        // dd($fechas[0]);
        
        //Cuando el metodo esta local (en este controllados)
        // $provincias = $this->getCasosCantones($ult_fecha);
        $provincias = Funciones::getCasosCantones($ult_fecha);
                

        $titulo = 'Mapa Ecuador';
        return View::make('web.datosEcuador1',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }

    public function ecuadorDatos2() {
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last(); 
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.datosEcuador2',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }

    public function ecuadorDatos3() {        
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last();      
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.datosEcuador3',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }

    public function ecuadorDatos4() {        
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last();     
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.datosEcuador4',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }

    public function ecuadorDatos5() {        
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last();  
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.datosEcuador5',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }

    public function ecuadorDatos6() {        
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last();   
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.datosEcuador6',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }

    public function ecuadorDatos7() {        
        $fechas = Caso::limit(10)->orderBy('fecha','desc')->get();
        $ult_fecha = Caso::all()->last();         
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);        
                
        $fecha1 = $ult_fecha->fecha;
        $fecha2 = Carbon::parse($ult_fecha->fecha)->addDays(-1)->format('Y-m-d');
        $fecha3 = Carbon::parse($ult_fecha->fecha)->addDays(-2)->format('Y-m-d');
        $fecha4 = Carbon::parse($ult_fecha->fecha)->addDays(-3)->format('Y-m-d');
        $fecha5 = Carbon::parse($ult_fecha->fecha)->addDays(-4)->format('Y-m-d');
        $fecha6 = Carbon::parse($ult_fecha->fecha)->addDays(-5)->format('Y-m-d');
        $fecha7 = Carbon::parse($ult_fecha->fecha)->addDays(-6)->format('Y-m-d');
        $fecha8 = Carbon::parse($ult_fecha->fecha)->addDays(-7)->format('Y-m-d');
        $fecha9 = Carbon::parse($ult_fecha->fecha)->addDays(-8)->format('Y-m-d');
        $fecha10 = Carbon::parse($ult_fecha->fecha)->addDays(-9)->format('Y-m-d');
       
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.datosEcuador7',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }

    public function ecuadorDatos8() {        
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last();   
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.datosEcuador8',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias'));
    }


    public function regionDatos($region) {
        $region = strtolower($region);
        
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last(); 
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);        
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.region',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias','region'));
    }

    public function provinciaDatos($provincia) {
        $provincia = strtolower($provincia);
        
        $fechas = Caso::all();
        $ult_fecha = Caso::all()->last(); 
        $ult_fecha_data = Funciones::getUltiFechaData();  

        $provincias = Funciones::getCasosCantones($ult_fecha);        
        
        $titulo = 'Mapa Ecuador';        
        return View::make('web.provincia',compact('titulo','fechas','ult_fecha','ult_fecha_data','provincias','provincia'));
    }

    public function cantonDatos($canton) {

    }

    
    public function getLlenarCasos(Request $request) {
        // $data = $request->all();

        // $sos = strpos('s_azuay', 's_');
        // $des = strpos('d_azuay', 'd_');
        // $rec = strpos('r_azuay', 'r_');
        // dd($aa === 0);
        
        $fecha_hoy = Carbon::now()->format('Y-m-d');
        $fecha_ult_caso = Caso::orderBy('fecha','DESC')->first()->fecha;

        $ult_fecha = Caso::all()->last();  

        // dd(unserialize($ult_fecha->seed));
        
        $all_casos = Caso::orderBy('fecha','DESC')->take(5)->get();        

        $ult_fecha = $ult_fecha->toArray();

        $casos = Caso::all();

        $ult_caso = Caso::all();
        

        $titulo = 'Llenar Casos Diarios';
        return View::make('admin.llenarCasos',compact('titulo','ult_fecha','fecha_hoy','all_casos'));

    }

    public function postLlenarCasos(Request $request) {
        $data = $request->all();  

        // dd($data['caso_id']);
        
        $fecha_hoy = Carbon::now()->format('Y-m-d');
        // $fecha_hoy = '2020-05-02';
        $fecha_ult_caso = Caso::orderBy('fecha','DESC')->first()->fecha;

        $ult_fecha = Caso::all()->last();         
        $ult_fecha = $ult_fecha->toArray();
        $casos = Caso::all();
        $ult_caso = Caso::all();        

        $current_caso = Caso::find($data['caso_id']);

        if ($current_caso != null) {
            $data['sospechosos'] = $data['muestras'] - $data['confirmados'] - $data['descartados'] - $data['alta_hospitalaria'];
            
            if ($data['fecha'] === $fecha_hoy) {
                $data['fecha'] = $fecha_hoy;

                // dd($data);
                // $data['seed'] = $data;
                // $data['seed'] = serialize($data);
                $current_caso->update($data);                           
            }else {
                dd('ESTAS TRATANDO DE EDITAR FECHAS ANTERIORES, POR FAVOR DUPLICA LOS DATOS DEL DÍA PRIMERO'); 
            }            
        }

        $ult_fecha = Caso::all()->last();         
        $ult_fecha = $ult_fecha->toArray();

        $all_casos = Caso::orderBy('fecha','DESC')->take(5)->get(); 

        $titulo = 'Llenar Casos Diarios';
        return View::make('admin.llenarCasos',compact('titulo','ult_fecha','fecha_hoy','all_casos'));
    }

    public function postDuplicarCasos(Request $request) {
        $data = $request->all();          

        $fecha_hoy = Carbon::now()->format('Y-m-d');
        // $fecha_hoy = '2020-05-02';

        $fecha_ult_caso = Caso::orderBy('fecha','DESC')->first()->fecha;

        $ult_fecha = Caso::all()->last(); 

        $new_caso = $ult_fecha;
        $new_caso['fecha'] = $fecha_hoy;
        $new_caso = $new_caso->toArray();

        unset($new_caso['id']);
        unset($new_caso['created_at']);
        unset($new_caso['updated_at']);
        // unset($new_caso['id']);

        Caso::create($new_caso);

        
        return back();
    }

    public function getCasosTodos(Request $request) {

        $all_casos = Caso::orderBy('fecha','DESC')->get(); 

        $titulo = 'Todos los casos';
        return View::make('admin.casosTodos',compact('titulo','all_casos'));

    }

    public function getVerCaso($casoId) {

        $caso = Caso::find($casoId);
        // $seed = unserialize($caso->seed);
        
        dd($caso->toArray());

        $titulo = 'Todos los casos';
        return View::make('admin.casosTodos',compact('titulo','all_casos'));

    }




    
  

    

}