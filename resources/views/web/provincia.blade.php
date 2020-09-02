@extends('layouts.app')
@section('content')

<!-- SOURCE -->
<!-- https://jsfiddle.net/gh/get/jquery/1.11.0/highslide-software/highcharts.com/tree/master/samples/mapdata/countries/ec/ec-all -->

<div class="container-fluid">                    

    
    <div class="row">       
        <div class="top20px col-md-12" align="center">          
            @include('partials.botonesProvincias')
        </div>
    </div>


    <div class="top20px container-fluid bottom50px">
        <div class="row">

            <div class="top20px1 col-12 col-md-6">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - {{ ucfirst($provincia) }} - Confirmados - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="provincia-pie1" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <div class="top20px1 col-12 col-md-6">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - {{ ucfirst($provincia) }} - Confirmados - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="provincia-line1" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <div class="top20px col-12 col-md-12">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - {{ ucfirst($provincia) }} - Confirmados - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">                        
                        <div id="provincia-line2" class="charts-full">    
                        </div>                                                    
                    </div>
                </div>
            </div>

            <!-- <div class="top20px col-12 col-md-12" id="info">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        
                        <b>Ecuador - {{ ucfirst($provincia) }} - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                    <div id="provincia-line3" class="charts-full">    
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
    
    
    
    var provincia_pie1 = null;
    var provincia_line1 = null;
    var provincia_line2 = null;
    var provincia_line3 = null;
    var provincia_line4 = null;

    var all_provincias = [];

    var series_cantones = [];
    var cantones_pie = [];

    var cantones_ult_fecha = [];

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
    
    
    
    @if($provincia === 'azuay')   

        cantones_ult_fecha = [{                        
            name: 'Confirmados',
            data: datos_provincias['azuay'][1]
        }, {
            name: 'Fallecidos',
            data: datos_provincias['azuay'][2]
        }, {
            name: 'Sospechosos',
            data: datos_provincias['azuay'][3]
        }, {
            name: 'Descartados',
            data: datos_provincias['azuay'][4]
        }];

        series_cantones = [{                                            
                name: cantones['cuenca'][0],
                data: cantones['cuenca'][1],
                y: cantones['cuenca'][2]
            }, {
                name: cantones['chordeleg'][0],
                data: cantones['chordeleg'][1],
                y: cantones['chordeleg'][2]
            }, {
                name: cantones['ponce_enriquez'][0],
                data: cantones['ponce_enriquez'][1],
                y: cantones['ponce_enriquez'][2]
            }, {
                name: cantones['el_pan'][0],
                data: cantones['el_pan'][1],
                y: cantones['el_pan'][2]
            }, {
                name: cantones['giron'][0],
                data: cantones['giron'][1],
                y: cantones['giron'][2]
            }, {
                name: cantones['guachapala'][0],
                data: cantones['guachapala'][1],
                y: cantones['guachapala'][2]
            }, {
                name: cantones['gualaceo'][0],
                data: cantones['gualaceo'][1],
                y: cantones['gualaceo'][2]
            }, {
                name: cantones['nabon'][0],
                data: cantones['nabon'][1],
                y: cantones['nabon'][2]
            }, {
                name: cantones['ona'][0],
                data: cantones['ona'][1],
                y: cantones['ona'][2]
            }, {                
                name: cantones['paute'][0],
                data: cantones['paute'][1],
                y: cantones['paute'][2]
            }, {
                name: cantones['pucara'][0],
                data: cantones['pucara'][1],
                y: cantones['pucara'][2]
            }, {
                name: cantones['san_fernando'][0],
                data: cantones['san_fernando'][1],
                y: cantones['san_fernando'][2]
            }, {
                name: cantones['santa_isabel'][0],
                data: cantones['santa_isabel'][1],
                y: cantones['santa_isabel'][2]
            }, {                
                name: cantones['sevilla_oro'][0],
                data: cantones['sevilla_oro'][1],
                y: cantones['sevilla_oro'][2]
            }, {
                name: cantones['sigsig'][0],
                data: cantones['sigsig'][2],
                y: cantones['sigsig'][2]     
            }];
                
    @elseif($provincia === 'guayas')
        cantones_ult_fecha = [{                        
            name: 'Confirmados',
            data: datos_provincias['guayas'][1]
        }, {
            name: 'Fallecidos',
            data: datos_provincias['guayas'][2]
        }, {
            name: 'Sospechosos',
            data: datos_provincias['guayas'][3]
        }, {
            name: 'Descartados',
            data: datos_provincias['guayas'][4]
        }];

        series_cantones = [{                                            
            name: cantones['guayaquil'][0],
                data: cantones['guayaquil'][1],
                y: cantones['guayaquil'][2]
            }, {
                name: cantones['baquerizo_moreno'][0],
                data: cantones['baquerizo_moreno'][1],
                y: cantones['baquerizo_moreno'][2]
            }, {
                name: cantones['balao'][0],
                data: cantones['balao'][1],
                y: cantones['balao'][2]            
            }, {
                name: cantones['balzar'][0],
                data: cantones['balzar'][1],
                y: cantones['balzar'][2]
            }, {
                name: cantones['colimes'][0],
                data: cantones['colimes'][1],
                y: cantones['colimes'][2]
            }, {
                name: cantones['daule'][0],
                data: cantones['daule'][1],
                y: cantones['daule'][2]
            }, {
                name: cantones['duran'][0],
                data: cantones['duran'][1],
                y: cantones['duran'][2]
            }, {
                name: cantones['el_empalme'][0],
                data: cantones['el_empalme'][1],
                y: cantones['el_empalme'][2]            
            }, {
                name: cantones['el_triunfo'][0],
                data: cantones['el_triunfo'][1],
                y: cantones['el_triunfo'][2]
            }, {
                name: cantones['general_antonio'][0],
                data: cantones['general_antonio'][1],
                y: cantones['general_antonio'][2]
            }, {
                name: cantones['isidro_ayora'][0],
                data: cantones['isidro_ayora'][1],
                y: cantones['isidro_ayora'][2]
            }, {
                name: cantones['sargentillo'][0],
                data: cantones['sargentillo'][1],
                y: cantones['sargentillo'][2]
            }, {
                name: cantones['marcelino'][0],
                data: cantones['marcelino'][1],
                y: cantones['marcelino'][2]            
            }, {
                name: cantones['milagro'][0],
                data: cantones['milagro'][1],
                y: cantones['milagro'][2]
            }, {
                name: cantones['naranjal'][0],
                data: cantones['naranjal'][1],
                y: cantones['naranjal'][2]
            }, {
                name: cantones['naranjito'][0],
                data: cantones['naranjito'][1],
                y: cantones['naranjito'][2]
            }, {
                name: cantones['nobol'][0],
                data: cantones['nobol'][1],
                y: cantones['nobol'][2]
            }, {
                name: cantones['palestina'][0],
                data: cantones['palestina'][1],
                y: cantones['palestina'][2]
            }, {
                name: cantones['pedro_carbo'][0],
                data: cantones['pedro_carbo'][1],
                y: cantones['pedro_carbo'][2]
            }, {
                name: cantones['playas'][0],
                data: cantones['playas'][1],
                y: cantones['playas'][2]
            }, {
                name: cantones['salitre'][0],
                data: cantones['salitre'][1],
                y: cantones['salitre'][2]
            }, {
                name: cantones['samborondon'][0],
                data: cantones['samborondon'][1],
                y: cantones['samborondon'][2]
            }, {
                name: cantones['santa_lucia'][0],
                data: cantones['santa_lucia'][1],
                y: cantones['santa_lucia'][2]
            }, {
                name: cantones['simon_bolivar'][0],
                data: cantones['simon_bolivar'][1],
                y: cantones['simon_bolivar'][2]
            }, {
                name: cantones['yaguachi'][0],
                data: cantones['yaguachi'][1],
                y: cantones['yaguachi'][2]
            }, {
                name: cantones['el_piedrero'][0],
                data: cantones['el_piedrero'][1],
                y: cantones['el_piedrero'][2]
            }];
            
    @elseif($provincia === 'el oro')
        cantones_ult_fecha = [{                        
            name: 'Confirmados',
            data: datos_provincias['el_oro'][1]
        }, {
            name: 'Fallecidos',
            data: datos_provincias['el_oro'][2]
        }, {
            name: 'Sospechosos',
            data: datos_provincias['el_oro'][3]
        }, {
            name: 'Descartados',
            data: datos_provincias['el_oro'][4]
        }];

        series_cantones = [{                                            
            name: cantones['machala'][0],
                data: cantones['machala'][1],
                y: cantones['machala'][2]
            }, {
                name: cantones['arenillas'][0],
                data: cantones['arenillas'][1],
                y: cantones['arenillas'][2]
            }, {
                name: cantones['chilla'][0],
                data: cantones['chilla'][1],
                y: cantones['chilla'][2]
            }, {
                name: cantones['atahualpa'][0],
                data: cantones['atahualpa'][1],
                y: cantones['atahualpa'][2]            
            }, {
                name: cantones['balsas'][0],
                data: cantones['balsas'][1],
                y: cantones['balsas'][2]           
            }, {
                name: cantones['el_guabo'][0],
                data: cantones['el_guabo'][1],
                y: cantones['el_guabo'][2]
            }, {
                name: cantones['huaquillas'][0],
                data: cantones['huaquillas'][1],
                y: cantones['huaquillas'][2]
            }, {
                name: cantones['las_lajas'][0],
                data: cantones['las_lajas'][1],
                y: cantones['las_lajas'][2]
            }, {
                name: cantones['marcabeli'][0],
                data: cantones['marcabeli'][1],
                y: cantones['marcabeli'][2]
            }, {
                name: cantones['pasaje'][0],
                data: cantones['pasaje'][1],
                y: cantones['pasaje'][2]
            }, {
                name: cantones['pinas'][0],
                data: cantones['pinas'][1],
                y: cantones['pinas'][2]
            }, {
                name: cantones['portovelo'][0],
                data: cantones['portovelo'][1],
                y: cantones['portovelo'][2]
            }, {
                name: cantones['santa_rosa'][0],
                data: cantones['santa_rosa'][1],
                y: cantones['santa_rosa'][2]
            }, {
                name: cantones['zaruma'][0],
                data: cantones['zaruma'][1],
                y: cantones['zaruma'][2]
            }];

    @elseif($provincia === 'los rios')

        cantones_ult_fecha = [{                        
            name: 'Confirmados',
            data: datos_provincias['los_rios'][1]
        }, {
            name: 'Fallecidos',
            data: datos_provincias['los_rios'][2]
        }, {
            name: 'Sospechosos',
            data: datos_provincias['los_rios'][3]
        }, {
            name: 'Descartados',
            data: datos_provincias['los_rios'][4]
        }];

        series_cantones = [{                                            
            name: cantones['babahoyo'][0],
                data: cantones['babahoyo'][1],
                y: cantones['babahoyo'][2]
            }, {
                name: cantones['baba'][0],
                data: cantones['baba'][1],
                y: cantones['baba'][2]
            }, {
                name: cantones['buena_fe'][0],
                data: cantones['buena_fe'][1],
                y: cantones['buena_fe'][2]            
            }, {
                name: cantones['mocache'][0],
                data: cantones['mocache'][1],
                y: cantones['mocache'][2]
            }, {
                name: cantones['montalvo'][0],
                data: cantones['montalvo'][1],
                y: cantones['montalvo'][2]
            }, {
                name: cantones['palenque'][0],
                data: cantones['palenque'][1],
                y: cantones['palenque'][2]
            }, {
                name: cantones['puebloviejo'][0],
                data: cantones['puebloviejo'][1],
                y: cantones['puebloviejo'][2]
            }, {
                name: cantones['quevedo'][0],
                data: cantones['quevedo'][1],
                y: cantones['quevedo'][2]
            }, {
                name: cantones['quinsaloma'][0],
                data: cantones['quinsaloma'][1],
                y: cantones['quinsaloma'][2]
            }, {
                name: cantones['urdaneta'][0],
                data: cantones['urdaneta'][1],
                y: cantones['urdaneta'][2]
            }, {
                name: cantones['valencia'][0],
                data: cantones['valencia'][1],
                y: cantones['valencia'][2]
            }, {
                name: cantones['ventanas'][0],
                data: cantones['ventanas'][1],
                y: cantones['ventanas'][2]
            }, {
                name: cantones['vinces'][0],
                data: cantones['vinces'][1],
                y: cantones['vinces'][2]
            }];      

    @elseif($provincia === 'pichincha')
        cantones_ult_fecha = [{                        
            name: 'Confirmados',
            data: datos_provincias['pichincha'][1]
        }, {
            name: 'Fallecidos',
            data: datos_provincias['pichincha'][2]
        }, {
            name: 'Sospechosos',
            data: datos_provincias['pichincha'][3]
        }, {
            name: 'Descartados',
            data: datos_provincias['pichincha'][4]
        }];

        series_cantones = [{                                            
            name: cantones['quito'][0],
                data: cantones['quito'][1],
                y: cantones['quito'][2]
            }, {
                name: cantones['mejia'][0],
                data: cantones['mejia'][1],
                y: cantones['mejia'][2]
            }, {
                name: cantones['cayambe'][0],
                data: cantones['cayambe'][1],
                y: cantones['cayambe'][2]
            }, {
                name: cantones['pedro_moncayo'][0],
                data: cantones['pedro_moncayo'][1],
                y: cantones['pedro_moncayo'][2]            
            }, {
                name: cantones['pedro_vicente'][0],
                data: cantones['pedro_vicente'][1],
                y: cantones['pedro_vicente'][2]
            }, {
                name: cantones['puerto_quito'][0],
                data: cantones['puerto_quito'][1],
                y: cantones['puerto_quito'][2]
            }, {
                name: cantones['ruminahui'][0],
                data: cantones['ruminahui'][1],
                y: cantones['ruminahui'][2]
            }, {
                name: cantones['bancos'][0],
                data: cantones['bancos'][1],
                y: cantones['bancos'][2]
            }];          

    @else
        cantones_ult_fecha = [{                        
            name: 'Confirmados',
            data: datos_provincias['canar'][1]
        }, {
            name: 'Fallecidos',
            data: datos_provincias['canar'][2]
        }, {
            name: 'Sospechosos',
            data: datos_provincias['canar'][3]
        }, {
            name: 'Descartados',
            data: datos_provincias['canar'][4]
        }];

        series_cantones = [{                                            
                name: cantones['azogues'][0],
                data: cantones['azogues'][1],
                y: cantones['azogues'][2]
            }, {
                name: cantones['biblian'][0],
                data: cantones['biblian'][1],
                y: cantones['biblian'][2]
            }, {
                name: cantones['canar'][0],
                data: cantones['canar'][1],
                y: cantones['canar'][2]
            }, {
                name: cantones['deleg'][0],
                data: cantones['deleg'][1],
                y: cantones['deleg'][2]
            }, {
                name: cantones['el_tambo'][0],
                data: cantones['el_tambo'][1],
                y: cantones['el_tambo'][2]
            }, {
                name: cantones['la_troncal'][0],
                data: cantones['la_troncal'][1],
                y: cantones['la_troncal'][2]
            }, {
                name: cantones['suscal'][0],
                data: cantones['suscal'][1],
                y: cantones['suscal'][2]
            }];
    @endif

    for (var i=0; i<=series_cantones.length-1; i++) {
        if (series_cantones[i].y === 0) {
            // alert(series_cantones[i].name);
            series_cantones.splice(i, 1);
        }
        
    }

    // alert(series_cantones.length);
    // alert(series_cantones[3].y === 0);



    provincia_pie1 = Highcharts.chart('provincia-pie1', {
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
            data: series_cantones

        }]
    });

        


    provincia_line1 = Highcharts.chart('provincia-line1', {

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

        series: cantones_ult_fecha,

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

    provincia_line2 = Highcharts.chart('provincia-line2', {

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

        series: series_cantones,

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

