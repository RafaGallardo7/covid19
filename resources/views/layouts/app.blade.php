<!DOCTYPE html>
<!-- <html lang="es"> -->
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1951584-5"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-1951584-5');
        </script>


        @include('partials.header')    

        
                          
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> 
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/> 

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">      
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/> 

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
                              
        
    
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">               

        <!-- webpack.mix.js -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>                         

        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" /> -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
                
        
        <!-- <link href="{{ asset('css/app_pruebas.css') }}" rel="stylesheet"> -->

        

        <style>
          
        </style>

        @yield('styles')
        @stack('styles')
    </head>
    <body>
        <div id="app">
            @include('partials.navBar')
            @yield('content')

            <!-- Modal Reutilizado para mostrar mensajes de eliminar items  -->
            <div class="modal" id="modal-eliminar">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">                
                    
                        <div class="modal-header card-header bg-dark text-white">
                            <h5 id="titulo-modal-eliminar" class="modal-title">Título</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                                                
                        <div class="modal-body">
                            <h6 id="mensaje-modal-eliminar" class="" align="center">Mensaje</h6>
                        </div>
                                                
                        <div class="modal-footer">
                            <button id="eliminar-item" type="button" class="btn btn-danger" data-dismiss="modal">
                                <i class="fa fa-fw fa-remove"></i> Sí
                            </button>   
                            <button type="button" class="btn btn-second" data-dismiss="modal">
                                <i class="fa fa-fw fa-remove"></i> No
                            </button>                                          
                        </div>                    
                    </div>
                </div>
            </div>

            <!-- Modal Reutilizado para mostrar mensajes de eliminar items  -->
            <div class="modal" id="modal-mensaje-datos">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">                
                    
                        <div class="modal-header card-header bg-dark text-white">
                            <h5 id="titulo-modal-eliminar" class="modal-title">Aviso sobre los datos usados en el sistema</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                                                
                        <div class="modal-body">
                            <h6 id="mensaje-modal-eliminar" class="top20px" align="center">Los datos utilizados provinciales han sido actualizados hasta el 24-04-2020</h6>
                            <h6 id="mensaje-modal-eliminar" class="top20px" align="center">Los datos utilizados cantonales han sido actualizados hasta el 23-04-2020</h6>
                            <h6 id="mensaje-modal-eliminar" class="top20px" align="center">Esto debido a que la página www.gestionderisgos.gob.ec no ha compartido nuevos datos provinciales ni cantonales.</h6>
                            <h6 id="mensaje-modal-eliminar" class="top20px" align="center">MUCHAS GRACIAS</h6>
                        </div>
                                                
                        <div class="modal-footer">                             
                            <button type="button" class="btn btn-second" data-dismiss="modal">
                                <i class="fa fa-fw fa-remove"></i> Cerrar
                            </button>                                          
                        </div>                    
                    </div>
                </div>
            </div>

        </div>
        
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">  

                           
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  -->


        
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <!-- webpack.mix.js -->
        <!-- <script src="{{ asset('js/all.js') }}" type="text/javascript"></script>         -->
        

        <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>           
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>           
           
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>    
                 
        
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> -->
        
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>   

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        
        

        <!-- COVID19 -->
        <script src="https://code.highcharts.com/maps/highmaps.js"></script>
        <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/mapdata/countries/ec/ec-all.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

        
        <!-- CUSTOM HIGHMAPS CHARTS -->
        <script src="{{ asset('js/ec-all-fix1.js') }}" type="text/javascript"></script>        
        
            
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v6.0&appId=795247517280044&autoLogAppEvents=1"></script>

        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <script type="text/javascript">   

            // $('#modal-mensaje-datos').modal('show');
        
            var datos_provincias = [];
            var all_provincias = [];
            var cantones = [];
            var data = [];

            var series_fechas = [];
            var series_confirmados = [];
            var series_sospechosos = [];
            var series_descartados = [];
            var series_fallecidos = [];
            var series_recuperados = [];
            var series_domiciliario = [];
            var series_hosp_estables = [];
            var series_hosp_reservado = [];
            var series_cerco = [];
            var series_muestras = [];  


            var series_guayas_c = [];
            var series_pichincha_c = [];
            var series_el_oro_c = [];
            var series_esmeraldas_c = [];
            var series_manabi_c = [];
            var series_sucumbios_c = [];
            var series_carchi_c = [];
            var series_imbabura_c = [];
            var series_orellana_c = [];
            var series_napo_c = [];
            var series_chimborazo_c = [];
            var series_azuay_c = [];
            var series_cotopaxi_c = [];
            var series_pastaza_c = [];
            var series_morona_c = [];
            var series_zamora_c = [];
            var series_loja_c = [];
            var series_bolivar_c = [];
            var series_galapagos_c = [];
            var series_canar_c = [];
            var series_santa_elena_c = [];
            var series_santo_domingo_c = [];
            var series_los_rios_c = [];
            var series_tungurahua_c = [];
            
            var series_guayas_f = [];
            var series_pichincha_f = [];
            var series_el_oro_f = [];
            var series_esmeraldas_f = [];
            var series_manabi_f = [];
            var series_sucumbios_f = [];
            var series_carchi_f = [];
            var series_imbabura_f = [];
            var series_orellana_f = [];
            var series_napo_f = [];
            var series_chimborazo_f = [];
            var series_azuay_f = [];
            var series_cotopaxi_f = [];
            var series_pastaza_f = [];
            var series_morona_f = [];
            var series_zamora_f = [];
            var series_loja_f = [];
            var series_bolivar_f = [];
            var series_galapagos_f = [];
            var series_canar_f = [];
            var series_santa_elena_f = [];
            var series_santo_domingo_f = [];
            var series_los_rios_f = [];
            var series_tungurahua_f = [];

            var series_guayas_s = [];
            var series_pichincha_s = [];
            var series_el_oro_s = [];
            var series_esmeraldas_s = [];
            var series_manabi_s = [];
            var series_sucumbios_s = [];
            var series_carchi_s = [];
            var series_imbabura_s = [];
            var series_orellana_s = [];
            var series_napo_s = [];
            var series_chimborazo_s = [];
            var series_azuay_s = [];
            var series_cotopaxi_s = [];
            var series_pastaza_s = [];
            var series_morona_s = [];
            var series_zamora_s = [];
            var series_loja_s = [];
            var series_bolivar_s = [];
            var series_galapagos_s = [];
            var series_canar_s = [];
            var series_santa_elena_s = [];
            var series_santo_domingo_s = [];
            var series_los_rios_s = [];
            var series_tungurahua_s = [];
            
            var series_guayas_d = [];
            var series_pichincha_d = [];
            var series_el_oro_d = [];
            var series_esmeraldas_d = [];
            var series_manabi_d = [];
            var series_sucumbios_d = [];
            var series_carchi_d = [];
            var series_imbabura_d = [];
            var series_orellana_d = [];
            var series_napo_d = [];
            var series_chimborazo_d = [];
            var series_azuay_d = [];
            var series_cotopaxi_d = [];
            var series_pastaza_d = [];
            var series_morona_d = [];
            var series_zamora_d = [];
            var series_loja_d = [];
            var series_bolivar_d = [];
            var series_galapagos_d = [];
            var series_canar_d = [];
            var series_santa_elena_d = [];
            var series_santo_domingo_d = [];
            var series_los_rios_d = [];
            var series_tungurahua_d = [];

            var series_cuenca = [];
            var series_ponce_enriquez = [];
            var series_chordeleg = [];
            var series_el_pan = [];
            var series_giron = [];
            var series_guachapala = [];
            var series_gualaceo = [];
            var series_nabon = [];
            var series_ona = [];
            var series_paute = [];
            var series_pucara = [];
            var series_santa_isabel = [];
            var series_san_fernando = [];
            var series_sevilla_oro = [];
            var series_sigsig = [];
            
       
        
            var series_guayaquil = [];
            var series_baquerizo_moreno = [];
            var series_balao = [];
            var series_balzar = [];
            var series_colimes = [];
            var series_daule = [];
            var series_duran = [];
            var series_el_empalme = [];
            var series_el_triunfo = [];
            var series_general_antonio = [];
            var series_isidro_ayora = [];
            var series_sargentillo = [];
            var series_marcelino = [];
            var series_milagro = [];
            var series_naranjal = [];
            var series_naranjito = [];
            var series_nobol = [];
            var series_palestina = [];
            var series_pedro_carbo = [];
            var series_playas = [];
            var series_salitre = [];
            var series_samborondon = [];
            var series_santa_lucia = [];
            var series_simon_bolivar = [];
            var series_yaguachi = [];
            var series_el_piedrero = [];

            var series_machala = [];
            var series_arenillas = [];
            var series_atahualpa = [];
            var series_balsas = [];
            var series_chilla = [];
            var series_el_guabo = [];
            var series_huaquillas = [];
            var series_las_lajas = [];
            var series_marcabeli = [];
            var series_pasaje = [];
            var series_pinas = [];
            var series_portovelo = [];
            var series_santa_rosa = [];
            var series_zaruma = [];

            var series_quito = [];
            var series_cayambe = [];
            var series_mejia = [];
            var series_pedro_moncayo = [];
            var series_pedro_vicente = [];
            var series_puerto_quito = [];
            var series_ruminahui = [];
            var series_bancos = [];

            var series_azogues = [];
            var series_biblian = [];
            var series_canar = [];
            var series_deleg = [];
            var series_el_tambo = [];
            var series_la_troncal = [];
            var series_suscal = [];
            
            var series_babahoyo = [];
            var series_baba = [];
            var series_buena_fe = [];
            var series_mocache = [];
            var series_montalvo = [];
            var series_palenque = [];
            var series_puebloviejo = [];
            var series_quevedo = [];
            var series_quinsaloma = [];
            var series_urdaneta = [];
            var series_valencia = [];
            var series_ventanas = [];
            var series_vinces = [];
            
            

           
            function getDatosEcuador(fechas,ult_fecha,provincias) {                 
                // alert(JSON.stringify(fechas[0].fecha));
                // alert(fechas.length);                    
                // alert(fechas[0].fecha);

                for (var i=0; i<= fechas.length-1; i++) {
                    series_fechas.push(fechas[i].fecha);

                    series_confirmados.push(fechas[i].confirmados);
                    series_sospechosos.push(fechas[i].sospechosos);
                    series_descartados.push(fechas[i].descartados);
                    series_fallecidos.push(fechas[i].fallecidos);
                    series_recuperados.push(fechas[i].recuperados);
                    series_domiciliario.push(fechas[i].domiciliario);
                    series_hosp_estables.push(fechas[i].hosp_estables);
                    series_hosp_reservado.push(fechas[i].hosp_reservado);
                    series_cerco.push(fechas[i].cerco);
                    series_muestras.push(fechas[i].muestras);

                    series_guayas_c.push(fechas[i].c_guayas);
                    series_pichincha_c.push(fechas[i].c_pichincha);
                    series_azuay_c.push(fechas[i].c_azuay);
                    series_cotopaxi_c.push(fechas[i].c_cotopaxi);
                    series_el_oro_c.push(fechas[i].c_el_oro);
                    series_esmeraldas_c.push(fechas[i].c_esmeraldas);
                    series_manabi_c.push(fechas[i].c_manabi);
                    series_sucumbios_c.push(fechas[i].c_sucumbios);
                    series_carchi_c.push(fechas[i].c_carchi);
                    series_imbabura_c.push(fechas[i].c_imbabura);
                    series_orellana_c.push(fechas[i].c_orellana);
                    series_napo_c.push(fechas[i].c_napo);
                    series_chimborazo_c.push(fechas[i].c_chimborazo);
                    series_pastaza_c.push(fechas[i].c_pastaza);
                    series_morona_c.push(fechas[i].c_morona);
                    series_zamora_c.push(fechas[i].c_zamora);
                    series_loja_c.push(fechas[i].c_loja);
                    series_bolivar_c.push(fechas[i].c_bolivar);
                    series_galapagos_c.push(fechas[i].c_galapagos);
                    series_canar_c.push(fechas[i].c_canar);
                    series_santa_elena_c.push(fechas[i].c_santa_elena);
                    series_santo_domingo_c.push(fechas[i].c_santo_domingo);
                    series_los_rios_c.push(fechas[i].c_los_rios);
                    series_tungurahua_c.push(fechas[i].c_tungurahua);
                    
                    series_guayas_f.push(fechas[i].f_guayas);
                    series_pichincha_f.push(fechas[i].f_pichincha);
                    series_azuay_f.push(fechas[i].f_azuay);
                    series_cotopaxi_f.push(fechas[i].f_cotopaxi);
                    series_el_oro_f.push(fechas[i].f_el_oro);
                    series_esmeraldas_f.push(fechas[i].f_esmeraldas);
                    series_manabi_f.push(fechas[i].f_manabi);
                    series_sucumbios_f.push(fechas[i].f_sucumbios);
                    series_carchi_f.push(fechas[i].f_carchi);
                    series_imbabura_f.push(fechas[i].f_imbabura);
                    series_orellana_f.push(fechas[i].f_orellana);
                    series_napo_f.push(fechas[i].f_napo);
                    series_chimborazo_f.push(fechas[i].f_chimborazo);
                    series_pastaza_f.push(fechas[i].f_pastaza);
                    series_morona_f.push(fechas[i].f_morona);
                    series_zamora_f.push(fechas[i].f_zamora);
                    series_loja_f.push(fechas[i].f_loja);
                    series_bolivar_f.push(fechas[i].f_bolivar);
                    series_galapagos_f.push(fechas[i].f_galapagos);
                    series_canar_f.push(fechas[i].f_canar);
                    series_santa_elena_f.push(fechas[i].f_santa_elena);
                    series_santo_domingo_f.push(fechas[i].f_santo_domingo);
                    series_los_rios_f.push(fechas[i].f_los_rios);
                    series_tungurahua_f.push(fechas[i].f_tungurahua);
                    
                    series_guayas_s.push(fechas[i].s_guayas);
                    series_pichincha_s.push(fechas[i].s_pichincha);
                    series_azuay_s.push(fechas[i].s_azuay);
                    series_cotopaxi_s.push(fechas[i].s_cotopaxi);
                    series_el_oro_s.push(fechas[i].s_el_oro);
                    series_esmeraldas_s.push(fechas[i].s_esmeraldas);
                    series_manabi_s.push(fechas[i].s_manabi);
                    series_sucumbios_s.push(fechas[i].s_sucumbios);
                    series_carchi_s.push(fechas[i].s_carchi);
                    series_imbabura_s.push(fechas[i].s_imbabura);
                    series_orellana_s.push(fechas[i].s_orellana);
                    series_napo_s.push(fechas[i].s_napo);
                    series_chimborazo_s.push(fechas[i].s_chimborazo);
                    series_pastaza_s.push(fechas[i].s_pastaza);
                    series_morona_s.push(fechas[i].s_morona);
                    series_zamora_s.push(fechas[i].s_zamora);
                    series_loja_s.push(fechas[i].s_loja);
                    series_bolivar_s.push(fechas[i].s_bolivar);
                    series_galapagos_s.push(fechas[i].s_galapagos);
                    series_canar_s.push(fechas[i].s_canar);
                    series_santa_elena_s.push(fechas[i].s_santa_elena);
                    series_santo_domingo_s.push(fechas[i].s_santo_domingo);
                    series_los_rios_s.push(fechas[i].s_los_rios);
                    series_tungurahua_s.push(fechas[i].s_tungurahua);
                    
                    series_guayas_d.push(fechas[i].d_guayas);
                    series_pichincha_d.push(fechas[i].d_pichincha);
                    series_azuay_d.push(fechas[i].d_azuay);
                    series_cotopaxi_d.push(fechas[i].d_cotopaxi);
                    series_el_oro_d.push(fechas[i].d_el_oro);
                    series_esmeraldas_d.push(fechas[i].d_esmeraldas);
                    series_manabi_d.push(fechas[i].d_manabi);
                    series_sucumbios_d.push(fechas[i].d_sucumbios);
                    series_carchi_d.push(fechas[i].d_carchi);
                    series_imbabura_d.push(fechas[i].d_imbabura);
                    series_orellana_d.push(fechas[i].d_orellana);
                    series_napo_d.push(fechas[i].d_napo);
                    series_chimborazo_d.push(fechas[i].d_chimborazo);
                    series_pastaza_d.push(fechas[i].d_pastaza);
                    series_morona_d.push(fechas[i].d_morona);
                    series_zamora_d.push(fechas[i].d_zamora);
                    series_loja_d.push(fechas[i].d_loja);
                    series_bolivar_d.push(fechas[i].d_bolivar);
                    series_galapagos_d.push(fechas[i].d_galapagos);
                    series_canar_d.push(fechas[i].d_canar);
                    series_santa_elena_d.push(fechas[i].d_santa_elena);
                    series_santo_domingo_d.push(fechas[i].d_santo_domingo);
                    series_los_rios_d.push(fechas[i].d_los_rios);
                    series_tungurahua_d.push(fechas[i].d_tungurahua);

                    series_cuenca.push(fechas[i].cuenca);
                    series_ponce_enriquez.push(fechas[i].ponce_enriquez);
                    series_chordeleg.push(fechas[i].chordeleg);
                    series_el_pan.push(fechas[i].el_pan);
                    series_giron.push(fechas[i].giron);
                    series_guachapala.push(fechas[i].guachapala);
                    series_gualaceo.push(fechas[i].gualaceo);
                    series_nabon.push(fechas[i].nabon);
                    series_ona.push(fechas[i].ona);
                    series_paute.push(fechas[i].paute);
                    series_pucara.push(fechas[i].pucara);
                    series_san_fernando.push(fechas[i].san_fernando);
                    series_santa_isabel.push(fechas[i].santa_isabel);
                    series_sevilla_oro.push(fechas[i].sevilla_oro);
                    series_sigsig.push(fechas[i].sigsig);

                    series_guayaquil.push(fechas[i].guayaquil);
                    series_baquerizo_moreno.push(fechas[i].baquerizo_moreno);
                    series_balao.push(fechas[i].balao);
                    series_balzar.push(fechas[i].balzar);
                    series_colimes.push(fechas[i].colimes);
                    series_daule.push(fechas[i].daule);
                    series_duran.push(fechas[i].duran);
                    series_el_empalme.push(fechas[i].el_empalme);
                    series_el_triunfo.push(fechas[i].el_triunfo);
                    series_general_antonio.push(fechas[i].general_antonio);
                    series_isidro_ayora.push(fechas[i].isidro_ayora);
                    series_sargentillo.push(fechas[i].sargentillo);
                    series_marcelino.push(fechas[i].marcelino);
                    series_milagro.push(fechas[i].milagro);
                    series_naranjal.push(fechas[i].naranjal);
                    series_naranjito.push(fechas[i].naranjito);
                    series_nobol.push(fechas[i].nobol);
                    series_palestina.push(fechas[i].palestina);
                    series_pedro_carbo.push(fechas[i].pedro_carbo);
                    series_playas.push(fechas[i].playas);
                    series_salitre.push(fechas[i].salitre);
                    series_samborondon.push(fechas[i].samborondon);
                    series_santa_lucia.push(fechas[i].santa_lucia);
                    series_simon_bolivar.push(fechas[i].simon_bolivar);
                    series_yaguachi.push(fechas[i].yaguachi);
                    series_el_piedrero.push(fechas[i].el_piedrero);
                    
                    series_machala.push(fechas[i].machala);
                    series_arenillas.push(fechas[i].arenillas);
                    series_atahualpa.push(fechas[i].atahualpa);
                    series_balsas.push(fechas[i].balsas);
                    series_chilla.push(fechas[i].chilla);
                    series_el_guabo.push(fechas[i].el_guabo);
                    series_huaquillas.push(fechas[i].huaquillas);
                    series_las_lajas.push(fechas[i].las_lajas);
                    series_marcabeli.push(fechas[i].marcabeli);
                    series_pasaje.push(fechas[i].pasaje);
                    series_pinas.push(fechas[i].pinas);
                    series_portovelo.push(fechas[i].portovelo);
                    series_santa_rosa.push(fechas[i].santa_rosa);
                    series_zaruma.push(fechas[i].zaruma);

                    series_quito.push(fechas[i].quito);
                    series_cayambe.push(fechas[i].cayambe);
                    series_mejia.push(fechas[i].mejia);
                    series_pedro_moncayo.push(fechas[i].pedro_moncayo);
                    series_pedro_vicente.push(fechas[i].pedro_vicente);
                    series_puerto_quito.push(fechas[i].puerto_quito);
                    series_ruminahui.push(fechas[i].ruminahui);
                    series_bancos.push(fechas[i].bancos);

                    series_azogues.push(fechas[i].azogues);
                    series_biblian.push(fechas[i].biblian);
                    series_canar.push(fechas[i].canar);
                    series_deleg.push(fechas[i].deleg);
                    series_el_tambo.push(fechas[i].el_tambo);
                    series_la_troncal.push(fechas[i].la_troncal);
                    series_suscal.push(fechas[i].suscal);


                    series_babahoyo.push(fechas[i].babahoyo);
                    series_baba.push(fechas[i].baba);
                    series_buena_fe.push(fechas[i].buena_fe);
                    series_mocache.push(fechas[i].mocache);
                    series_montalvo.push(fechas[i].montalvo);
                    series_palenque.push(fechas[i].palenque);
                    series_puebloviejo.push(fechas[i].puebloviejo);
                    series_quevedo.push(fechas[i].quevedo);
                    series_quinsaloma.push(fechas[i].quinsaloma);
                    series_urdaneta.push(fechas[i].urdaneta);
                    series_valencia.push(fechas[i].valencia);
                    series_ventanas.push(fechas[i].ventanas);
                    series_vinces.push(fechas[i].vinces);

                   
                    
                }

                datos_provincias['guayas'] = ['Guayas', series_guayas_c, series_guayas_f, series_guayas_s, series_guayas_d];
                datos_provincias['esmeraldas'] = ['Esmeraldas', series_esmeraldas_c, series_esmeraldas_f, series_esmeraldas_s, series_esmeraldas_d];
                datos_provincias['carchi'] = ['Carchi', series_carchi_c, series_carchi_f, series_carchi_s, series_carchi_d];
                datos_provincias['imbabura'] = ['Imbabura', series_imbabura_c, series_imbabura_f, series_imbabura_s, series_imbabura_d];
                datos_provincias['sucumbios'] = ['Sucumbíos', series_sucumbios_c, series_sucumbios_f, series_sucumbios_s, series_sucumbios_d];
                datos_provincias['santa_elena'] = ['Santa Elena', series_santa_elena_c, series_santa_elena_f, series_santa_elena_s, series_santa_elena_d];
                datos_provincias['santo_domingo'] = ['Santo Domingo', series_santo_domingo_c, series_santo_domingo_f, series_santo_domingo_s, series_santo_domingo_d];
                datos_provincias['azuay'] = ['Azuay', series_azuay_c, series_azuay_f, series_azuay_s, series_azuay_d];
                datos_provincias['el_oro'] = ['El Oro', series_el_oro_c, series_el_oro_f, series_el_oro_s, series_el_oro_d];
                datos_provincias['loja'] = ['Loja', series_loja_c, series_loja_f, series_loja_s, series_loja_d];
                datos_provincias['zamora'] = ['Zamora', series_zamora_c, series_zamora_f, series_zamora_s, series_zamora_d];
                datos_provincias['canar'] = ['Cañar', series_canar_c, series_canar_f, series_canar_s, series_canar_d];
                datos_provincias['bolivar'] = ['Bolivar', series_bolivar_c, series_bolivar_f, series_bolivar_s, series_bolivar_d];
                datos_provincias['cotopaxi'] = ['Cotopaxi', series_cotopaxi_c, series_cotopaxi_f, series_cotopaxi_s, series_cotopaxi_d];
                datos_provincias['los_rios'] = ['Los Ríos', series_los_rios_c, series_los_rios_f, series_los_rios_s, series_los_rios_d];
                datos_provincias['manabi'] = ['Manabí', series_manabi_c, series_manabi_f, series_manabi_s, series_manabi_d];
                datos_provincias['chimborazo'] = ['Chimborazo', series_chimborazo_c, series_chimborazo_f, series_chimborazo_s, series_chimborazo_d];
                datos_provincias['morona'] = ['Morona Santiago', series_morona_c, series_morona_f, series_morona_s, series_morona_d];
                datos_provincias['pichincha'] = ['Pichincha', series_pichincha_c, series_pichincha_f, series_pichincha_s, series_pichincha_d];
                datos_provincias['pastaza'] = ['Pastaza', series_pastaza_c, series_pastaza_f, series_pastaza_s, series_pastaza_d];
                datos_provincias['tungurahua'] = ['Tungurahua', series_tungurahua_c, series_tungurahua_f, series_tungurahua_s, series_tungurahua_d];
                datos_provincias['orellana'] = ['Orellana', series_orellana_c, series_orellana_f, series_orellana_s, series_orellana_d];
                datos_provincias['napo'] = ['Napo', series_napo_c, series_napo_f, series_napo_s, series_napo_d];
                datos_provincias['galapagos'] = ['Galápagos', series_galapagos_c, series_galapagos_f, series_galapagos_s, series_galapagos_d];

                data = [
                    ['ec-gu', ult_fecha.c_guayas, ult_fecha.f_guayas, ult_fecha.s_guayas, ult_fecha.d_guayas, provincias.guayas],
                    ['ec-es', ult_fecha.c_esmeraldas, ult_fecha.f_esmeraldas, ult_fecha.s_esmeraldas, ult_fecha.d_esmeraldas, provincias.esmeraldas],
                    ['ec-cr', ult_fecha.c_carchi, ult_fecha.f_carchi, ult_fecha.s_carchi, ult_fecha.d_carchi, provincias.carchi],
                    ['ec-im', ult_fecha.c_imbabura, ult_fecha.f_imbabura, ult_fecha.s_imbabura, ult_fecha.d_imbabura, provincias.imbabura],
                    ['ec-su', ult_fecha.c_sucumbios, ult_fecha.f_sucumbios, ult_fecha.s_sucumbios, ult_fecha.d_sucumbios, provincias.sucumbios],
                    ['ec-se', ult_fecha.c_santa_elena, ult_fecha.f_santa_elena, ult_fecha.s_santa_elena, ult_fecha.d_santa_elena, provincias.santa_elena],
                    ['ec-sd', ult_fecha.c_santo_domingo, ult_fecha.f_santo_domingo, ult_fecha.s_santo_domingo, ult_fecha.d_santo_domingo, provincias.santo_domingo],
                    ['ec-az', ult_fecha.c_azuay, ult_fecha.f_azuay, ult_fecha.s_azuay, ult_fecha.d_azuay, provincias.azuay],
                    ['ec-eo', ult_fecha.c_el_oro, ult_fecha.f_el_oro, ult_fecha.s_el_oro, ult_fecha.d_el_oro, provincias.el_oro],
                    ['ec-lj', ult_fecha.c_loja, ult_fecha.f_loja, ult_fecha.s_loja, ult_fecha.d_loja, provincias.loja],
                    ['ec-zc', ult_fecha.c_zamora, ult_fecha.f_zamora, ult_fecha.s_zamora, ult_fecha.d_zamora, provincias.zamora],
                    ['ec-cn', ult_fecha.c_canar, ult_fecha.f_canar, ult_fecha.s_canar, ult_fecha.d_canar, provincias.canar],
                    ['ec-bo', ult_fecha.c_bolivar, ult_fecha.f_bolivar, ult_fecha.s_bolivar, ult_fecha.d_bolivar, provincias.bolivar],
                    ['ec-ct', ult_fecha.c_cotopaxi, ult_fecha.f_cotopaxi, ult_fecha.s_cotopaxi, ult_fecha.d_cotopaxi, provincias.cotopaxi],
                    ['ec-lr', ult_fecha.c_los_rios, ult_fecha.f_los_rios, ult_fecha.s_los_rios, ult_fecha.d_los_rios, provincias.los_rios],
                    ['ec-mn', ult_fecha.c_manabi, ult_fecha.f_manabi, ult_fecha.s_manabi, ult_fecha.d_manabi, provincias.manabi],
                    ['ec-cb', ult_fecha.c_chimborazo, ult_fecha.f_chimborazo, ult_fecha.s_chimborazo, ult_fecha.d_chimborazo, provincias.chimborazo],
                    ['ec-ms', ult_fecha.c_morona, ult_fecha.f_morona, ult_fecha.s_morona, ult_fecha.d_morona, provincias.morona],
                    ['ec-pi', ult_fecha.c_pichincha, ult_fecha.f_pichincha, ult_fecha.s_pichincha, ult_fecha.d_pichincha, provincias.pichincha],
                    ['ec-pa', ult_fecha.c_pastaza, ult_fecha.f_pastaza, ult_fecha.s_pastaza, ult_fecha.d_pastaza, provincias.pastaza],
                    ['ec-1076', ult_fecha.c_tungurahua, ult_fecha.f_tungurahua, ult_fecha.s_tungurahua, ult_fecha.d_tungurahua, provincias.tungurahua],
                    ['ec-na', ult_fecha.c_orellana, ult_fecha.f_orellana, ult_fecha.s_orellana, ult_fecha.d_orellana, provincias.orellana],
                    ['ec-tu', ult_fecha.c_napo, ult_fecha.f_napo, ult_fecha.s_napo, ult_fecha.d_napo, provincias.napo],
                    ['ec-ga', ult_fecha.c_galapagos, ult_fecha.f_galapagos, ult_fecha.s_galapagos, ult_fecha.d_galapagos, provincias.galapagos]
                ];    

                all_provincias['ec-gu'] = ['Guayas', series_guayas_c, series_guayas_f, series_guayas_s, series_guayas_d];
                all_provincias['ec-es'] = ['Esmeraldas', series_esmeraldas_c, series_esmeraldas_f, series_esmeraldas_s, series_esmeraldas_d];
                all_provincias['ec-cr'] = ['Carchi', series_carchi_c, series_carchi_f, series_carchi_s, series_carchi_d];
                all_provincias['ec-im'] = ['Imbabura', series_imbabura_c, series_imbabura_f, series_imbabura_s, series_imbabura_d];
                all_provincias['ec-su'] = ['Sucumbíos', series_sucumbios_c, series_sucumbios_f, series_sucumbios_s, series_sucumbios_d];
                all_provincias['ec-se'] = ['Santa Elena', series_santa_elena_c, series_santa_elena_f, series_santa_elena_s, series_santa_elena_d];
                all_provincias['ec-sd'] = ['Santo Domingo', series_santo_domingo_c, series_santo_domingo_f, series_santo_domingo_s, series_santo_domingo_d];
                all_provincias['ec-az'] = ['Azuay', series_azuay_c, series_azuay_f, series_azuay_s, series_azuay_d];
                all_provincias['ec-eo'] = ['El Oro', series_el_oro_c, series_el_oro_f, series_el_oro_s, series_el_oro_d];
                all_provincias['ec-lj'] = ['Loja', series_loja_c, series_loja_f, series_loja_s, series_loja_d];
                all_provincias['ec-zc'] = ['Zamora', series_zamora_c, series_zamora_f, series_zamora_s, series_zamora_d];
                all_provincias['ec-cn'] = ['Zanar', series_canar_c, series_canar_f, series_canar_s, series_canar_d];
                all_provincias['ec-bo'] = ['Bolivar', series_bolivar_c, series_bolivar_f, series_bolivar_s, series_bolivar_d];
                all_provincias['ec-ct'] = ['Cotopaxi', series_cotopaxi_c, series_cotopaxi_f, series_cotopaxi_s, series_cotopaxi_d];
                all_provincias['ec-lr'] = ['Los Ríos', series_los_rios_c, series_los_rios_f, series_los_rios_s, series_los_rios_d];
                all_provincias['ec-mn'] = ['Manabí', series_manabi_c, series_manabi_f, series_manabi_s, series_manabi_d];
                all_provincias['ec-cb'] = ['Chimborazo', series_chimborazo_c, series_chimborazo_f, series_chimborazo_s, series_chimborazo_d];
                all_provincias['ec-ms'] = ['Morona Santiago', series_morona_c, series_morona_f, series_morona_s, series_morona_d];
                all_provincias['ec-pi'] = ['Pichincha', series_pichincha_c, series_pichincha_f, series_pichincha_s, series_pichincha_d];
                all_provincias['ec-pa'] = ['Pastaza', series_pastaza_c, series_pastaza_f, series_pastaza_s, series_pastaza_d];
                all_provincias['ec-1076'] = ['Tungurahua', series_tungurahua_c, series_tungurahua_f, series_tungurahua_s, series_tungurahua_d];
                all_provincias['ec-na'] = ['Orellana', series_orellana_c, series_orellana_f, series_orellana_s, series_orellana_d];
                all_provincias['ec-tu'] = ['Napo', series_napo_c, series_napo_f, series_napo_s, series_napo_d];
                all_provincias['ec-ga'] = ['Galápagos', series_galapagos_c, series_galapagos_f, series_galapagos_s, series_galapagos_d];

                cantones['cuenca'] = ['Cuenca', series_cuenca, ult_fecha.cuenca];
                cantones['ponce_enriquez'] = ['Ponce Enríquez', series_ponce_enriquez, ult_fecha.ponce_enriquez];
                cantones['chordeleg'] = ['Chordeleg', series_chordeleg, ult_fecha.chordeleg];
                cantones['el_pan'] = ['El Pan', series_el_pan, ult_fecha.el_pan];
                cantones['giron'] = ['Girón', series_giron, ult_fecha.giron];
                cantones['guachapala'] = ['Guachapala', series_guachapala, ult_fecha.guachapala];
                cantones['gualaceo'] = ['Gualaceo', series_gualaceo, ult_fecha.gualaceo];
                cantones['nabon'] = ['Nabón', series_nabon, ult_fecha.nabon];
                cantones['ona'] = ['Oña', series_ona, ult_fecha.ona];
                cantones['paute'] = ['Paute', series_paute, ult_fecha.paute];
                cantones['pucara'] = ['Pucará', series_pucara, ult_fecha.pucara];
                cantones['san_fernando'] = ['San Fernando', series_san_fernando, ult_fecha.san_fernando];
                cantones['santa_isabel'] = ['Santa Isabel', series_santa_isabel, ult_fecha.santa_isabel];
                cantones['sevilla_oro'] = ['Sevilla de Oro', series_sevilla_oro, ult_fecha.sevilla_oro];
                cantones['sigsig'] = ['Sigsig', series_sigsig, ult_fecha.sigsig];

                cantones['guayaquil'] = ['Guayaquil', series_guayaquil, ult_fecha.guayaquil];
                cantones['baquerizo_moreno'] = ['Alfredo Baquerizo Moreno', series_baquerizo_moreno, ult_fecha.baquerizo_moreno];
                cantones['balao'] = ['Balao', series_balao, ult_fecha.balao];
                cantones['balzar'] = ['Balzar', series_balzar, ult_fecha.balzar];
                cantones['colimes'] = ['Colimes', series_colimes, ult_fecha.colimes];
                cantones['daule'] = ['Daule', series_daule, ult_fecha.daule];
                cantones['duran'] = ['Duran', series_duran, ult_fecha.duran];
                cantones['el_empalme'] = ['El Empalme', series_el_empalme, ult_fecha.el_empalme];
                cantones['el_triunfo'] = ['El Triunfo', series_el_triunfo, ult_fecha.el_triunfo];
                cantones['general_antonio'] = ['General Antonio Elizalde', series_general_antonio, ult_fecha.general_antonio];
                cantones['isidro_ayora'] = ['Isidro Ayora', series_isidro_ayora, ult_fecha.isidro_ayora];
                cantones['sargentillo'] = ['Sargentillo', series_sargentillo, ult_fecha.sargentillo];
                cantones['marcelino'] = ['Marcelino', series_marcelino, ult_fecha.marcelino];
                cantones['milagro'] = ['Milagro', series_milagro, ult_fecha.milagro];
                cantones['naranjal'] = ['Naranjal', series_naranjal, ult_fecha.naranjal];
                cantones['naranjito'] = ['Naranjito', series_naranjito, ult_fecha.naranjito];
                cantones['nobol'] = ['Nobol', series_nobol, ult_fecha.nobol];
                cantones['palestina'] = ['Palestina', series_palestina, ult_fecha.palestina];
                cantones['pedro_carbo'] = ['Pedro Carbo', series_pedro_carbo, ult_fecha.pedro_carbo];
                cantones['playas'] = ['Playas', series_playas, ult_fecha.playas];
                cantones['salitre'] = ['salitre', series_salitre, ult_fecha.salitre];
                cantones['samborondon'] = ['Samborondon', series_samborondon, ult_fecha.samborondon];
                cantones['santa_lucia'] = ['Santa Lucía', series_santa_lucia, ult_fecha.santa_lucia];
                cantones['simon_bolivar'] = ['Simón Bolívar', series_simon_bolivar, ult_fecha.simon_bolivar];
                cantones['yaguachi'] = ['Yaguachi', series_yaguachi, ult_fecha.yaguachi];
                cantones['el_piedrero'] = ['El Piedrero', series_el_piedrero, ult_fecha.el_piedrero];

                cantones['machala'] = ['Machala', series_machala, ult_fecha.machala];
                cantones['arenillas'] = ['Arenillas', series_arenillas, ult_fecha.arenillas];
                cantones['atahualpa'] = ['Atahualpa', series_atahualpa, ult_fecha.atahualpa];
                cantones['balsas'] = ['Balsas', series_balsas, ult_fecha.balsas];
                cantones['chilla'] = ['Chilla', series_chilla, ult_fecha.chilla];
                cantones['el_guabo'] = ['El Guabo', series_el_guabo, ult_fecha.el_guabo];
                cantones['huaquillas'] = ['Huaquillas', series_huaquillas, ult_fecha.huaquillas];
                cantones['las_lajas'] = ['Las Lajas', series_las_lajas, ult_fecha.las_lajas];
                cantones['marcabeli'] = ['Marcabelí', series_marcabeli, ult_fecha.marcabeli];
                cantones['pasaje'] = ['Pasaje', series_pasaje, ult_fecha.pasaje];
                cantones['pinas'] = ['Piñas', series_pinas, ult_fecha.pinas];
                cantones['portovelo'] = ['Portovelo', series_portovelo, ult_fecha.portovelo];
                cantones['santa_rosa'] = ['Santa Rosa', series_santa_rosa, ult_fecha.santa_rosa];
                cantones['zaruma'] = ['Zaruma', series_zaruma, ult_fecha.zaruma];


                cantones['quito'] = ['Quito', series_quito, ult_fecha.quito];
                cantones['cayambe'] = ['Cayambe', series_cayambe, ult_fecha.cayambe];
                cantones['mejia'] = ['Mejia', series_mejia, ult_fecha.mejia];
                cantones['pedro_moncayo'] = ['Pedro Moncayo', series_pedro_moncayo, ult_fecha.pedro_moncayo];
                cantones['pedro_vicente'] = ['Pedro Vicente Maldonado', series_pedro_vicente, ult_fecha.pedro_vicente];
                cantones['puerto_quito'] = ['Puerto Quito', series_puerto_quito, ult_fecha.puerto_quito];
                cantones['ruminahui'] = ['Rumiñahui', series_ruminahui, ult_fecha.ruminahui];
                cantones['bancos'] = ['San Miguel de los Bancos', series_bancos, ult_fecha.bancos];

                cantones['azogues'] = ['Azogues', series_azogues, ult_fecha.azogues];
                cantones['biblian'] = ['Biblián', series_biblian, ult_fecha.biblian];
                cantones['canar'] = ['Cañar', series_canar, ult_fecha.canar];
                cantones['deleg'] = ['Déleg', series_deleg, ult_fecha.deleg];
                cantones['el_tambo'] = ['El Tambo', series_el_tambo, ult_fecha.el_tambo];
                cantones['la_troncal'] = ['La Troncal', series_la_troncal, ult_fecha.la_troncal];
                cantones['suscal'] = ['Suscal', series_suscal, ult_fecha.suscal];

                cantones['babahoyo'] = ['Babahoyo', series_babahoyo, ult_fecha.babahoyo];
                cantones['baba'] = ['Baba', series_baba, ult_fecha.baba];
                cantones['buena_fe'] = ['Buena Fé', series_buena_fe, ult_fecha.buena_fe];
                cantones['mocache'] = ['Mocache', series_mocache, ult_fecha.mocache];
                cantones['montalvo'] = ['Montalvo', series_montalvo, ult_fecha.montalvo];
                cantones['palenque'] = ['Palenque', series_palenque, ult_fecha.palenque];
                cantones['puebloviejo'] = ['Puebloviejo', series_puebloviejo, ult_fecha.puebloviejo];
                cantones['quevedo'] = ['Quevedo', series_quevedo, ult_fecha.quevedo];
                cantones['quinsaloma'] = ['Quinsaloma', series_quinsaloma, ult_fecha.quinsaloma];
                cantones['urdaneta'] = ['Urdaneta', series_urdaneta, ult_fecha.urdaneta];
                cantones['valencia'] = ['Valencia', series_valencia, ult_fecha.valencia];
                cantones['ventanas'] = ['Ventanas', series_ventanas, ult_fecha.ventanas];
                cantones['vinces'] = ['Vinces', series_vinces, ult_fecha.vinces];
                
                


            }   
        

            
            
            $(function() {                                                  
                    
                // $(".datepicker").datepicker({ 
                //         autoclose: true, 
                //         todayHighlight: true,
                //         dateFormat: 'yy-mm-dd'
                // }).datepicker('update', new Date());
               
                               
                $('.datetimepicker').datetimepicker({
                    locale: 'es-EC',  
                    format:'YYYY-MM-DD'                  
                    // inline: true,
                    // sideBySide: true                              
                });     

                $('.datepicker').datetimepicker({
                    locale: 'es-EC',                                     
                    format:'YYYY-MM-DD',
                    icons:{
                        time: 'fa fa-history',
                        date: 'fa fa-calendar',
                        up: 'fa fa-sort-asc',
                        down: 'fa fa-sort-desc',
                        previous: 'fa fa-toggle-left',
                        next: 'fa fa-toggle-right',
                        today: 'fa fa-bolt',
                        clear: 'fa fa-trash',
                        close: 'fa fa-close'
                    }                                                         
                });       

                $('.timepicker').datetimepicker({
                    locale: 'es-EC',                                        
                    format: 'LT',         
                    icons:{
                        time: 'fa fa-history',
                        date: 'fa fa-calendar',
                        up: 'fa fa-sort-asc',
                        down: 'fa fa-sort-desc',
                        previous: 'fa fa-toggle-left',
                        next: 'fa fa-toggle-right',
                        today: 'fa fa-bolt',
                        clear: 'fa fa-trash',
                        close: 'fa fa-close'
                    }               
                });               


                // Submit se ejecute una sola vez cuando internet esta lento
                $("form").submit(function() {              
                    $('input[type="submit"]').attr('disabled','disabled');
                    $('button[type="submit"]').attr('disabled','disabled');
                }); 
                

          
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip(); 
                });
                
                // Configuraciones de las DataTables
                $('.datatable').DataTable({
                    "pagingType": "full_numbers",                    
                    "paging": true,
                    "responsive": false,
                    "iDisplayLength": 50,
                    "aaSorting": [[ 0, 'Asc' ]],                     
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "autoWidth": false,
                    "info": true,
                    // language: {
                    //     "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                    // }  
                    // language: {
                    //     "decimal": "",
                    //     "emptyTable": "No hay información",
                    //     "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    //     "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    //     "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    //     "infoPostFix": "",
                    //     "thousands": ",",
                    //     "lengthMenu": "Mostrar _MENU_ Entradas",
                    //     "loadingRecords": "Cargando...",
                    //     "processing": "Procesando...",
                    //     "search": "Buscar:",
                    //     "zeroRecords": "Sin resultados encontrados",
                    //     "paginate": {
                    //         "first": "Primero",
                    //         "last": "Ultimo",
                    //         "next": "Siguiente",
                    //         "previous": "Anterior"
                    //     }
                    // }              
                });     

                //Configuraciones para Notificaciones TOASTR
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };  

            });

            function validarInput(e,data){
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = data;
                especiales = "8-37-39-46";

                tecla_especial = false;
                for(var i in especiales){
                    if(key == especiales[i]){
                        tecla_especial = true; 
                        break;
                    }
                }

                if(letras.indexOf(tecla)==-1 && !tecla_especial){
                    return false;
                }
            }    

            function validarEmail(mail) {                
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                    return (true)
                }             
                return (false)
            }

            $(document).on('click','.inputDate',function(e){  
                $('.datepicker').trigger('focus');
            });   
            
           
            
        </script>
        
        
        @yield('scripts')
        @stack('scripts')
    </body>
    <footer>
        @include('partials.footer')
    </footer>
</html>
