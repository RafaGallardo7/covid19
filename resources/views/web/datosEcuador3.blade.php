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
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header" id="map-header">
                        <b>Ecuador - Casos Confirmados Covid19 - {{$ult_fecha->fecha}}</b>
                    </div>                                        
                    <div class="card-body">
                        <!-- <figure class="highcharts-figure"> -->
                            <div id="pais-chart1" class="charts-full">    
                            </div>                            
                        <!-- </figure> -->
                    </div>
                </div>
            </div>
            <div class="top20px col-12 col-md-12" id="info">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Casos Confirmados Covid19 - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <!-- <figure class="highcharts-figure"> -->
                            <div id="pais-chart2" class="charts-full">    
                            </div>                            
                        <!-- </figure> -->
                    </div>
                </div>
            </div>
            <div class="top20px col-12 col-md-12" id="info2">
                <div class="card">                    
                    <div class="card-header" id="label_chart2">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Casos Confirmados Covid19 - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <!-- <figure class="highcharts-figure"> -->
                            <div id="pais-chart3" class="charts-full">    
                            </div>                            
                        <!-- </figure> -->
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
    
    var pais_chart = null;
    var chart_ecuador1 = null;
    var chart_ecuador2 = null;
    var chart_ecuador3 = null;

    

    getDatosEcuador(fechas,ult_fecha,provincias);
    
               
    

   

  
  

    chart_ecuador1 = Highcharts.chart('pais-chart1', {

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
            // accessibility: {
            //     rangeDescription: 'Range: 10 to 20'
            // }
            // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            categories: series_fechas
        },

        // legend: {
        //     layout: 'vertical',
        //     align: 'right',
        //     verticalAlign: 'middle'
        // },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 0
            }
        },
       
        series: [{            
            // name: all_provincias['ec-gu'][0],
            name: 'Confirmados',
            data: series_confirmados
        // }, {
        //     name: 'Fallecidos',
        //     data: series_fallecidos
        }, {
            name: 'Sospechosos',
            data: series_sospechosos
        }, {
            name: 'Descartados',
            data: series_descartados
        }, {
        //     name: 'Recuperados',
        //     data: series_recuperados
        // }, {
            name: 'Aislamiento Domiciliario',
            data: series_domiciliario
        }, {
        //     name: 'Hospital Estables',
        //     data: series_hosp_estables
        // }, {
        //     name: 'Pronóstico Reservado',
        //     data: series_hosp_reservado
        // }, {
        //     name: 'Cerco Epidemiológico',
        //     data: series_cerco
        // }, {
            name: 'Muestras Tomadas',
            data: series_muestras            
        }],

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

    chart_ecuador2 = Highcharts.chart('pais-chart2', {

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
            // accessibility: {
            //     rangeDescription: 'Range: 10 to 20'
            // }
            // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            categories: series_fechas
        },

        // legend: {
        //     layout: 'vertical',
        //     align: 'right',
        //     verticalAlign: 'middle'
        // },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 0
            }
        },

        series: [{            
            // name: all_provincias['ec-gu'][0],
                    
            name: 'Fallecidos',
            data: series_fallecidos        
        }, {
            name: 'Recuperados',
            data: series_recuperados
        // }, {
        //     name: 'Aislamiento Domiciliario',
        //     data: series_domiciliario
        }, {
            name: 'Hospital Estables',
            data: series_hosp_estables
        }, {
            name: 'Pronóstico Reservado',
            data: series_hosp_reservado
        // }, {
        //     name: 'Cerco Epidemiológico',
        //     data: series_cerco
        // }, {
        //     name: 'Muestras Tomadas',
        //     data: series_muestras            
        }],

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

    chart_ecuador3 = Highcharts.chart('pais-chart3', {

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
            // accessibility: {
            //     rangeDescription: 'Range: 10 to 20'
            // }
            // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            categories: series_fechas
        },

        // legend: {
        //     layout: 'vertical',
        //     align: 'right',
        //     verticalAlign: 'middle'
        // },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 0
            }
        },

        series: [{            
            // name: all_provincias['ec-gu'][0],
            name: 'Confirmados',
            data: series_confirmados
        // }, {
        //     name: 'Fallecidos',
        //     data: series_fallecidos
        }, {
            name: 'Sospechosos',
            data: series_sospechosos
        }, {
            name: 'Descartados',
            data: series_descartados
        // }, {
        //     name: 'Recuperados',
        //     data: series_recuperados
        }, {
            name: 'Aislamiento Domiciliario',
            data: series_domiciliario
        }, {
            name: 'Hospital Estables',
            data: series_hosp_estables
        }, {
            name: 'Pronóstico Reservado',
            data: series_hosp_reservado
        }, {
            name: 'Cerco Epidemiológico',
            data: series_cerco
        }, {
            name: 'Muestras Tomadas',
            data: series_muestras            
        }],

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

