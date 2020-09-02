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
                    <div class="top10px" id="container" style="height:72vh">                        
                    </div>
                </div>
            </div>
            <div class="top20px col-12 col-md-12" id="info">
                <div class="card">                    
                    <div class="card-header" id="label_provincia">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Click en cada provincia para ver historial</b>
                    </div>
                    <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="provincia-chart">    
                            </div>
                            <!-- <p class="highcharts-description">
                                CoronaVirusDisease
                            </p> -->
                        </figure>
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
    var provincia_chart = null;
    

    getDatosEcuador(fechas,ult_fecha,provincias);
    
               

    provincia_chart = Highcharts.chart('provincia-chart', {

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
        }, {
            name: 'Fallecidos',
            data: series_fallecidos
        // }, {
        //     name: 'Sospechosos',
        //     data: series_sospechosos
        // }, {
        //     name: 'Descartados',
        //     data: series_descartados
        // }, {
        //     name: 'Recuperados',
        //     data: series_recuperados
        // }, {
        //     name: 'Aislamiento Domiciliario',
        //     data: series_domiciliario
        // }, {
        //     name: 'Hospital Estables',
        //     data: series_hosp_estables
        // }, {
        //     name: 'Pronóstico Reservado',
        //     data: series_hosp_reservado
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


    
    // provincia_chart.plotOptions.series.point.events.click();
    
    // provincia_chart.update({
    //     series:[{
    //         name: all_provincias['ec-gu'][0],
    //         data:  all_provincias['ec-gu'][1]
    //     }]
    // })


    
      
    // Create the chart
    pais_chart = Highcharts.mapChart('container', {
        chart: {
            map: 'countries/ec/ec-all'
        },

        title: {
            // text: 'Highmaps basic demo'
            text: null
        },

        subtitle: {
            // text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/ec/ec-all.js">Ecuador</a>'
            text: null
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        colorAxis: {
            minColor: '#FFEEEE',
            maxColor: '#AA0000',
            // max: maxValue,
            min: 0
        },

        tooltip: {
            headerFormat: '<b>{point.point.name}</b><br> Confirmados: {point.point.value}<br>' +
                            'Fallecidos: {point.point.fallecidos}<br>' +
                            'Sospechosos: {point.point.sospechosos}<br>' +
                            'Descartados: {point.point.descartados}<br>',            
            pointFormat: '<span><b>Cantones:</b></span><br>' +
                        '<span>{point.cantones}</span><br>',                                    
        },

        plotOptions:{
            series:{
                point:{
                    events:{
                        click: function(){      

                            // $('#info')
                            $('html, body').animate({
                                scrollTop: $("#info").offset().top
                            }, 500);

                            $('#label_provincia').html('<b>'+all_provincias[this.options['hc-key']][0]+'</b>');       

                            // alert("Province Code : "+this.options['hc-key']);                            
                        
                            // $('#provincia-chart').highcharts().update({
                            provincia_chart.update({
                                series:[{
                                    // name: all_provincias[this.options['hc-key']][0],
                                    name: 'Confirmados',
                                    data:  all_provincias[this.options['hc-key']][1]
                                },
                                {
                                    name: 'Fallecidos',
                                    data:  all_provincias[this.options['hc-key']][2]
                                }]
                            })
                        }
                    }
                }
            }
        },

        series: [{            
            data:data,        
            name: 'Detalles',        
            animation: true,    
            keys: ['hc-key','value','fallecidos','sospechosos','descartados','cantones'],              
            states: {
                hover: {
                    color: '#000000'
                }
            },
            // tooltip: {
            //     valueSuffix: '/km²'
            // },
            dataLabels: {
                enabled: true, //nombre de la provincia
                format: '{point.name}',                
            },
        }, {
            name: 'Separators',
            type: 'mapline',
            // data: Highcharts.geojson(Highcharts.maps['countries/ec/ec-all'], 'mapline'),
            color: 'silver',
            nullColor: 'silver',
            showInLegend: false,
            enableMouseTracking: false
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

