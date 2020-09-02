@extends('layouts.app')
@section('content')

<!-- SOURCE -->
<!-- https://jsfiddle.net/gh/get/jquery/1.11.0/highslide-software/highcharts.com/tree/master/samples/mapdata/countries/ec/ec-all -->

<div class="container-fluid">                    

    <div class="row">       
        <div class="top20px col-md-12" align="center">          
            @include('partials.botonesTopDatos')
        </div>
    </div>    
        

    <div class="top20px container-fluid bottom50px">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Muestras tomadas - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <div id="muestras1-chart" class="charts-full">    
                        </div>                                                                         
                    </div>
                </div>
            </div>
           
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - Muestras Tomadas - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="muestras2-chart" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <div class="top20px col-12 col-md-6">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Casos Confirmados - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <div id="confirmados1-chart" class="charts-full">    
                        </div>                                                                         
                    </div>
                </div>
            </div>
           
            <div class="top20px col-12 col-md-6">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - Casos Confirmados - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="confirmados2-chart" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <div class="top20px col-12 col-md-6">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Casos Confirmados por género - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <div id="genero-chart" class="charts-full">    
                        </div>                                                                         
                    </div>
                </div>
            </div>
           
            <div class="top20px col-12 col-md-6">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - Casos Confirmados por edades - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="edades-chart" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <div class="top20px col-12 col-md-6">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Casos Confirmados por provincia - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <div id="confirmados3-chart" class="charts-full">    
                        </div>                                                                         
                    </div>
                </div>
            </div>
           
            <div class="top20px col-12 col-md-6">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - Fallecidos por provincia - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="fallecidos1-chart" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            
                      
            
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
    
    var muestras1_chart = null;
    var muestras2_chart = null;
    var confirmados1_chart = null;
    var confirmados2_chart = null;
    
    var genero_chart = null;
    var edades_chart = null;
    
    var confirmados3_chart = null;   
    var fallecidos1_chart = null;



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
    
        $("div.toolbar").html('<div style="margin-top:-20px;"><i class="fa fa-check-square text-red"></i> - Confirmados  <i class="fa fa-user-times" style="padding-left:30px;"></i> - Fallecidos </div>');
    });

    getDatosEcuador(fechas,ult_fecha,provincias);                           

   
  

    muestras1_chart = Highcharts.chart('muestras1-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            // pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            pointFormat: '{series.name} <b>{point.y}</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Muestras tomadas',
                y: ult_fecha.muestras,
                // sliced: true,
                // selected: true
            // }, {
            //     name: 'Internet Explorer',
            //     y: 11.84
            // }, {
            //     name: 'Firefox',
            //     y: 10.85
            // }, {
            //     name: 'Edge',
            //     y: 4.67           
            }]
        }]
    });

    muestras2_chart = Highcharts.chart('muestras2-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            pointFormat: '{series.name} <b>{point.y} totales</b> <br> <b>{point.percentage:.1f} %</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Casos Confirmados',
                y: ult_fecha.confirmados,
                // sliced: true,
                // selected: true
            }, {
                name: 'Casos en Sospecha',
                y: ult_fecha.sospechosos,
            }, {
                name: 'Casos Descartados',
                y: ult_fecha.descartados,
            // }, {
            //     name: 'Edge',
            //     y: 4.67           
            }]
        }]
    });

    

    confirmados1_chart = Highcharts.chart('confirmados1-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            // pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            pointFormat: '{series.name} <b>{point.y}</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Casos Confirmados',
                y: ult_fecha.confirmados,
                color: '#FF0000'
                // sliced: true,
                // selected: true
            // }, {
            //     name: 'Internet Explorer',
            //     y: 11.84
            // }, {
            //     name: 'Firefox',
            //     y: 10.85
            // }, {
            //     name: 'Edge',
            //     y: 4.67           
            }]
        }]
    });

    confirmados2_chart = Highcharts.chart('confirmados2-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            pointFormat: '{series.name} <b>{point.y} totales</b> <br> <b>{point.percentage:.1f} %</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Aislamiento Domiciliario',
                y: ult_fecha.domiciliario,
                color: '#FF0000'
                // sliced: true,
                // selected: true
            }, {
                name: 'Hospitalizados Estables',
                y: ult_fecha.hosp_estables
            }, {
                name: 'Pronóstico Reservado',
                y: ult_fecha.hosp_reservado
            }, {
                name: 'Alta Hospitalaria',
                y: ult_fecha.recuperados
            }, {
                name: 'Fallecidos',
                y: ult_fecha.fallecidos
            }]
        }]
    });

    genero_chart = Highcharts.chart('genero-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            pointFormat: '{series.name} <b>{point.y} totales</b> <br> <b>{point.percentage:.1f} %</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Hombres',
                y: ult_fecha.hombres,
                // sliced: true,
                // selected: true
            }, {
                name: 'Mujeres',
                y: ult_fecha.mujeres,            
            // }, {
            //     name: 'Edge',
            //     y: 4.67           
            }]
        }]
    });

    edades_chart = Highcharts.chart('edades-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            pointFormat: '{series.name} <b>{point.y} totales</b> <br> <b>{point.percentage:.1f} %</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                },
                showInLegend: true
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: '0 a 11 meses',
                y: ult_fecha.cero_once_meses,
                // sliced: true,
                // selected: true
            }, {
                name: '1 a 4 años',
                y: ult_fecha.uno_cuatro,
            }, {
                name: '5 a 9 años',
                y: ult_fecha.cinco_nueve,
            }, {
                name: '10 a 14 años',
                y: ult_fecha.diez_catorce,
            }, {
                name: '15 a 19 años',
                y: ult_fecha.quince_dieznueve,
            }, {
                name: '20 a 49 años',
                y: ult_fecha.veinte_cuatronueve,
            }, {
                name: '50 a 64 años',
                y: ult_fecha.cincuenta_seiscuatro,
            }, {
                name: 'más de 65',
                y: ult_fecha.mas_seiscinco,
            }]
        }]
    });

    confirmados3_chart = Highcharts.chart('confirmados3-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            pointFormat: '{series.name} <b>{point.y} totales</b> <br> <b>{point.percentage:.1f} %</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                },
                // showInLegend: true
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Azuay',
                y: ult_fecha.c_azuay,
                color: '#FFFF00'
                // sliced: true,
                // selected: true
            }, {
                name: 'Bolívar',
                y: ult_fecha.c_bolivar
            }, {
                name: 'Cañar',
                y: ult_fecha.c_canar
            }, {
                name: 'Carchi',
                y: ult_fecha.c_carchi
            }, {
                name: 'Chimborazo',
                y: ult_fecha.c_chimborazo
            }, {
                name: 'Cotopaxi',
                y: ult_fecha.c_cotopaxi
            }, {
                name: 'El Oro',
                y: ult_fecha.c_el_oro
            }, {
                name: 'Esmeraldas',
                y: ult_fecha.c_esmeraldas
            }, {
                name: 'Galápagos',
                y: ult_fecha.c_galapagos
            }, {
                name: 'Guayas',
                y: ult_fecha.c_guayas
            }, {
                name: 'Imbabura',
                y: ult_fecha.c_imbabura
            }, {
                name: 'Loja',
                y: ult_fecha.c_loja
            }, {
                name: 'Los Ríos',
                y: ult_fecha.c_los_rios
            }, {
                name: 'Manabí',
                y: ult_fecha.c_manabi
            }, {
                name: 'Morona Santiago',
                y: ult_fecha.c_morona
            }, {
                name: 'Napo',
                y: ult_fecha.c_napo
            }, {
                name: 'Orellana',
                y: ult_fecha.c_orellana
            }, {
                name: 'Pastaza',
                y: ult_fecha.c_pastaza
            }, {
                name: 'Pichincha',
                y: ult_fecha.c_pichincha
            }, {
                name: 'Santa Elena',
                y: ult_fecha.c_santa_elena
            }, {
                name: 'Santo Domingo de los Tsáchilas',
                y: ult_fecha.c_santo_domingo
            }, {
                name: 'Sucumbíos',
                y: ult_fecha.c_sucumbios
            }, {
                name: 'Tungurahua',
                y: ult_fecha.c_tungurahua
            }, {
                name: 'Zamora Chinchipe',
                y: ult_fecha.c_zamora
            }]
        }]
    });

    
    fallecidos1_chart = Highcharts.chart('fallecidos1-chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: null
        },
        tooltip: {
            pointFormat: '{series.name} <b>{point.y} totales</b> <br> <b>{point.percentage:.1f} %</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: '',
            colorByPoint: true,
            data: [{
                name: 'Azuay',
                y: ult_fecha.f_azuay,
                color: '#FFFF00'
                // sliced: true,
                // selected: true
            }, {
                name: 'Bolívar',
                y: ult_fecha.f_bolivar
            }, {
                name: 'Cañar',
                y: ult_fecha.f_canar
            }, {
                name: 'Carchi',
                y: ult_fecha.f_carchi
            }, {
                name: 'Chimborazo',
                y: ult_fecha.f_chimborazo
            }, {
                name: 'Cotopaxi',
                y: ult_fecha.f_cotopaxi
            }, {
                name: 'El Oro',
                y: ult_fecha.f_el_oro
            }, {
                name: 'Esmeraldas',
                y: ult_fecha.f_esmeraldas
            }, {
                name: 'Galápagos',
                y: ult_fecha.f_galapagos
            }, {
                name: 'Guayas',
                y: ult_fecha.f_guayas,
                color: '#F00000'
            }, {
                name: 'Imbabura',
                y: ult_fecha.f_imbabura
            }, {
                name: 'Loja',
                y: ult_fecha.f_loja
            }, {
                name: 'Los Ríos',
                y: ult_fecha.f_los_rios
            }, {
                name: 'Manabí',
                y: ult_fecha.f_manabi
            }, {
                name: 'Morona Santiago',
                y: ult_fecha.f_morona
            }, {
                name: 'Napo',
                y: ult_fecha.f_napo
            }, {
                name: 'Orellana',
                y: ult_fecha.f_orellana
            }, {
                name: 'Pastaza',
                y: ult_fecha.f_pastaza
            }, {
                name: 'Pichincha',
                y: ult_fecha.f_pichincha
            }, {
                name: 'Santa Elena',
                y: ult_fecha.f_santa_elena
            }, {
                name: 'Santo Domingo de los Tsáchilas',
                y: ult_fecha.f_santo_domingo
            }, {
                name: 'Sucumbíos',
                y: ult_fecha.f_sucumbios
            }, {
                name: 'Tungurahua',
                y: ult_fecha.f_tungurahua
            }, {
                name: 'Zamora Chinchipe',
                y: ult_fecha.f_zamora
            }]
        }]
    });

    
        
     
</script>
@stop

<style>
   

</style>

@push('scripts')
<script type="text/javascript">

</script>
@endpush

