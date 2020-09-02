@extends('layouts.app')
@section('content')

<!-- SOURCE -->
<!-- https://jsfiddle.net/gh/get/jquery/1.11.0/highslide-software/highcharts.com/tree/master/samples/mapdata/countries/ec/ec-all -->

<div class="container-fluid">                    

    
    <div class="row">
        <!-- <div class="col-md-2 pull-left top10px left10px">
            <a class="btn btn-second pull-left" align="center" href="{{URL::to('/')}}">
                <i class="fa fa-chevron-left text-bold"> Regresar</i>
            </a>
        </div>   -->
        <div class="top20px col-md-12" align="center">
            
            <a href="{{route('ecuador-region', ['region' => 'costa'])}}" class="btn btn-md btn-second">Costa</a>
            <a href="{{route('ecuador-region', ['region' => 'sierra'])}}" class="btn btn-md btn-second">Sierra</a>
            <a href="{{route('ecuador-region', ['region' => 'oriente'])}}" class="btn btn-md btn-second">Oriente</a>            
            
        </div>
    </div>

    <div class="top20px container-fluid bottom50px">
        <div class="row">

            <div class="top20px1 col-12 col-md-12">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - {{ ucfirst($region) }} - Confirmados - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="region-chart-confirmados" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <div class="top20px col-12 col-md-12">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - {{ ucfirst($region) }} - Fallecidos - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="region-chart-fallecidos" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <div class="top20px col-12 col-md-12" id="info">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - {{ ucfirst($region) }} - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive top20px">
                            <table id="tablaProvincias" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
                                <thead class="text-secondary">
                                    <tr>
                                        <th>Fecha</th>				                                				
                                        @if($region === 'costa')                                                                                                                        			                                				
                                            <th>El Oro</th>
                                            <th>Esmeraldas</th>				
                                            <th>Guayas</th>				
                                            <th>Los Ríos</th>				
                                            <th>Manabí</th>				
                                            <th>Santa Elena</th>				
                                            <th>Santo Domingo</th>				                                                                                
                                        @elseif($region === 'sierra')                                                                                                                        			                                				
                                            <th>Azuay</th>
                                            <th>Bolivar</th>				
                                            <th>Cañar</th>				
                                            <th>Carchi</th>				
                                            <th>Chimborazo</th>				
                                            <th>Cotopaxi</th>				
                                            <th>Imbabura</th>				                                                                                
                                            <th>Loja</th>				                                                                                
                                            <th>Pichincha</th>				                                                                                
                                            <th>Tungurahua</th>				                                                                                
                                        @else                                                                                                                        
                                            <th>Morona Santiago</th>
                                            <th>Napo</th>				
                                            <th>Orellana</th>				
                                            <th>Pastaza</th>				
                                            <th>Sucumbíos</th>				
                                            <th>Zamora Chimchipe</th>				
                                            <th>Galápagos</th>				                                                                                
                                        @endif
                                    </tr>
                                </thead>
                                <tbody class="font-size90">
                                    @foreach($fechas->reverse() as $index => $dato)                                
                                        <tr>        
                                            <td>{{$dato->fecha}}</td>
                                            @if($region === 'costa')                                                                            
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_el_oro}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_el_oro}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_esmeraldas}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_esmeraldas}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_guayas}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_guayas}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_los_rios}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_los_rios}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_manabi}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_manabi}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_santa_elena}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_santa_elena}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_santo_domingo}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_santo_domingo}}                                                                                                	                                                
                                                </td> 				                                                                                
                                            @elseif($region === 'sierra')                                                                            
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_azuay}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_azuay}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_bolivar}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_bolivar}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_canar}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_canar}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_carchi}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_carchi}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_chimborazo}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_chimborazo}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_cotopaxi}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_cotopaxi}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_imbabura}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_imbabura}}                                                                                                	                                                
                                                </td> 					                                                                                
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_loja}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_loja}}                                                                                                	                                                
                                                </td> 					                                                                                
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_pichincha}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_pichincha}}                                                                                                	                                                
                                                </td> 					                                                                                
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_tungurahua}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_tungurahua}}                                                                                                	                                                
                                                </td> 					                                                                                
                                            @else                                                                            
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_morona}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_morona}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_napo}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_napo}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_orellana}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_orellana}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_pastaza}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_pastaza}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_sucumbios}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_sucumbios}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_zamora}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_zamora}}                                                                                                	                                                
                                                </td>
                                                <td>
                                                    <i class="fa fa-check-square text-red"></i>:{{$dato->c_galapagos}}
                                                    <br>
                                                    <i class="fa fa-user-times"></i>:{{$dato->f_galapagos}}                                                                                                	                                                
                                                </td> 				                                                                                
                                            @endif                                                                                                                                                                                                                                                                                       
                                        </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
            
            
            

            <!-- <div class="top20px col-12 col-md-12" id="info2">
                <div class="card">                    
                    <div class="card-header" id="label_chart2">                        
                        <b>Ecuador - Casos Confirmados Covid19</b>
                    </div>
                    <div class="card-body">                        
                        <div id="pais-chart3" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div> -->
        </div>
    </div>    

    @include('partials.botonesDownShare')
                   
</div>
@endsection

<style>
    
</style>

<input type="hidden" id="fechas" name="fechas" value="{{ $fechas }}">
<input type="hidden" id="ult_fecha" name="ult_fecha" value="{{ $ult_fecha }}">
<input type="hidden" id="provincias" name="provincias" value="{{ $provincias }}">



<script type="text/javascript"> 
    
</script>

@section('scripts')
<script type="text/javascript">   

    var fechas = JSON.parse($('#fechas').val());
    var ult_fecha = JSON.parse($('#ult_fecha').val());
    var provincias = JSON.parse($('#provincias').val());
    
    var pais_chart = null;
    var chart_ecuador1 = null;
    var chart_ecuador2 = null;
    var chart_ecuador3 = null;

    var all_provincias = [];

    var series_region_c = [];
    var series_region_f = [];

    $(document).ready(function() {
        $('#tablaProvincias').DataTable({
            "pagingType": "full_numbers",                    
            "paging": true,
            "responsive": false,
            "iDisplayLength": 50,
            "aaSorting": [[ 0, 'Asc' ]],                     
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "autoWidth": false,
            "info": true,
            "dom": '<"toolbar">frtip'
        });
    
        $("div.toolbar").html('<div align="center" style="margin-top:-20px;"><i class="fa fa-check-square text-red"></i> - Confirmados  <i class="fa fa-user-times" style="padding-left:30px;"></i> - Fallecidos </div>');
    });

    getDatosEcuador(fechas,ult_fecha,provincias);                           

    all_provincias['ec-gu'] = ['Guayas', series_guayas_c, series_guayas_f];
    all_provincias['ec-es'] = ['Esmeraldas', series_esmeraldas_c, series_esmeraldas_f];
    all_provincias['ec-cr'] = ['Carchi', series_carchi_c, series_carchi_f];
    all_provincias['ec-im'] = ['Imbabura', series_imbabura_c, series_imbabura_f];
    all_provincias['ec-su'] = ['Sucumbíos', series_sucumbios_c, series_sucumbios_f];
    all_provincias['ec-se'] = ['Santa Elena', series_santa_elena_c, series_santa_elena_f];
    all_provincias['ec-sd'] = ['Santo Domingo', series_santo_domingo_c, series_santo_domingo_f];
    all_provincias['ec-az'] = ['Azuay', series_azuay_c, series_azuay_f];
    all_provincias['ec-eo'] = ['El Oro', series_el_oro_c, series_el_oro_f];
    all_provincias['ec-lj'] = ['Loja', series_loja_c, series_loja_f];
    all_provincias['ec-zc'] = ['Zamora', series_zamora_c, series_zamora_f];
    all_provincias['ec-cn'] = ['Zanar', series_canar_c, series_canar_f];
    all_provincias['ec-bo'] = ['Bolivar', series_bolivar_c, series_bolivar_f];
    all_provincias['ec-ct'] = ['Cotopaxi', series_cotopaxi_c, series_cotopaxi_f];
    all_provincias['ec-lr'] = ['Los Ríos', series_los_rios_c, series_los_rios_f];
    all_provincias['ec-mn'] = ['Manabí', series_manabi_c, series_manabi_f];
    all_provincias['ec-cb'] = ['Chimborazo', series_chimborazo_c, series_chimborazo_f];
    all_provincias['ec-ms'] = ['Morona Santiago', series_morona_c, series_morona_f];
    all_provincias['ec-pi'] = ['Pichincha', series_pichincha_c, series_pichincha_f];
    all_provincias['ec-pa'] = ['Pastaza', series_pastaza_c, series_pastaza_f];
    all_provincias['ec-1076'] = ['Tungurahua', series_tungurahua_c, series_tungurahua_f];
    all_provincias['ec-na'] = ['Orellana', series_orellana_c, series_orellana_f];
    all_provincias['ec-tu'] = ['Napo', series_napo_c, series_napo_f];
    all_provincias['ec-ga'] = ['Galápagos', series_galapagos_c, series_galapagos_f];

    @if($region === 'costa')   
        series_region_c = [{                                            
                name: datos_provincias['el_oro'][0],
                data: datos_provincias['el_oro'][1]
            }, {
                name: datos_provincias['esmeraldas'][0],
                data: datos_provincias['esmeraldas'][1]
            }, {
                name: datos_provincias['guayas'][0],
                data: datos_provincias['guayas'][1]
            }, {
                name: datos_provincias['los_rios'][0],
                data: datos_provincias['los_rios'][1]
            }, {
                name: datos_provincias['manabi'][0],
                data: datos_provincias['manabi'][1]
            }, {
                name: datos_provincias['santa_elena'][0],
                data: datos_provincias['santa_elena'][1]
            }, {
                name: datos_provincias['santo_domingo'][0],
                data: datos_provincias['santo_domingo'][1]
            }];

        series_region_f = [{                                            
                name: datos_provincias['el_oro'][0],
                data: datos_provincias['el_oro'][2]
            }, {
                name: datos_provincias['esmeraldas'][0],
                data: datos_provincias['esmeraldas'][2]
            }, {
                name: datos_provincias['guayas'][0],
                data: datos_provincias['guayas'][2]
            }, {
                name: datos_provincias['los_rios'][0],
                data: datos_provincias['los_rios'][2]
            }, {
                name: datos_provincias['manabi'][0],
                data: datos_provincias['manabi'][2]
            }, {
                name: datos_provincias['santa_elena'][0],
                data: datos_provincias['santa_elena'][2]
            }, {
                name: datos_provincias['santo_domingo'][0],
                data: datos_provincias['santo_domingo'][2]
            }];
    @elseif($region === 'sierra')
        series_region_c = [{                                            
                name: datos_provincias['azuay'][0],
                data: datos_provincias['azuay'][1]
            }, {
                name: datos_provincias['bolivar'][0],
                data: datos_provincias['bolivar'][1]
            }, {
                name: datos_provincias['canar'][0],
                data: datos_provincias['canar'][1]
            }, {
                name: datos_provincias['carchi'][0],
                data: datos_provincias['carchi'][1]
            }, {
                name: datos_provincias['chimborazo'][0],
                data: datos_provincias['chimborazo'][1]
            }, {
                name: datos_provincias['cotopaxi'][0],
                data: datos_provincias['cotopaxi'][1]
            }, {
                name: datos_provincias['imbabura'][0],
                data: datos_provincias['imbabura'][1]
            }, {
                name: datos_provincias['loja'][0],
                data: datos_provincias['loja'][1]
            }, {
                name: datos_provincias['pichincha'][0],
                data: datos_provincias['pichincha'][1]
            }, {
                name: datos_provincias['tungurahua'][0],
                data: datos_provincias['tungurahua'][1]                  
            }];

        series_region_f = [{                                            
                name: datos_provincias['azuay'][0],
                data: datos_provincias['azuay'][2]
            }, {
                name: datos_provincias['bolivar'][0],
                data: datos_provincias['bolivar'][2]
            }, {
                name: datos_provincias['canar'][0],
                data: datos_provincias['canar'][2]
            }, {
                name: datos_provincias['carchi'][0],
                data: datos_provincias['carchi'][2]
            }, {
                name: datos_provincias['chimborazo'][0],
                data: datos_provincias['chimborazo'][2]
            }, {
                name: datos_provincias['cotopaxi'][0],
                data: datos_provincias['cotopaxi'][2]
            }, {
                name: datos_provincias['imbabura'][0],
                data: datos_provincias['imbabura'][2]
            }, {
                name: datos_provincias['loja'][0],
                data: datos_provincias['loja'][2]
            }, {
                name: datos_provincias['pichincha'][0],
                data: datos_provincias['pichincha'][2]
            }, {
                name: datos_provincias['tungurahua'][0],
                data: datos_provincias['tungurahua'][2]                  
            }];
    @else
        series_region_c = [{                                            
                name: datos_provincias['morona'][0],
                data: datos_provincias['morona'][1]
            }, {
                name: datos_provincias['napo'][0],
                data: datos_provincias['napo'][1]
            }, {
                name: datos_provincias['orellana'][0],
                data: datos_provincias['orellana'][1]
            }, {
                name: datos_provincias['pastaza'][0],
                data: datos_provincias['pastaza'][1]
            }, {
                name: datos_provincias['sucumbios'][0],
                data: datos_provincias['sucumbios'][1]
            }, {
                name: datos_provincias['zamora'][0],
                data: datos_provincias['zamora'][1]
            }, {
                name: datos_provincias['galapagos'][0],
                data: datos_provincias['galapagos'][1]
            }];

        series_region_f = [{                                            
                name: datos_provincias['morona'][0],
                data: datos_provincias['morona'][2]
            }, {
                name: datos_provincias['napo'][0],
                data: datos_provincias['napo'][2]
            }, {
                name: datos_provincias['orellana'][0],
                data: datos_provincias['orellana'][2]
            }, {
                name: datos_provincias['pastaza'][0],
                data: datos_provincias['pastaza'][2]
            }, {
                name: datos_provincias['sucumbios'][0],
                data: datos_provincias['sucumbios'][2]
            }, {
                name: datos_provincias['zamora'][0],
                data: datos_provincias['zamora'][2]
            }, {
                name: datos_provincias['galapagos'][0],
                data: datos_provincias['galapagos'][2]
            }];
    @endif

    chart_ecuador1 = Highcharts.chart('region-chart-confirmados', {

        title: {
            text: null
        },

        subtitle: {
            text: null
        },

        yAxis: {
            title: {
                text: null
            }
        },

        xAxis: {            
            categories: series_fechas
        },        

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 0
            }
        },
       
        series: series_region_c,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    chart_ecuador2 = Highcharts.chart('region-chart-fallecidos', {

        title: {
            text: null
        },

        subtitle: {
            text: null
        },

        yAxis: {
            title: {
                text: null
            }
        },

        xAxis: {            
            categories: series_fechas
        },        

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 0
            }
        },

        series: series_region_f,

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    
        
     
</script>
@stop

<style>
  
</style>

@push('scripts')
<script type="text/javascript">

</script>
@endpush

