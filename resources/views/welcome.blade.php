@extends('layouts.app')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="{{asset('images/home1.jpg')}}" style="width:100%;" alt="First slide">
            <div class="container">
                <div class="carousel-caption">                    
                    <!-- <h1 class="animated swing delay-1s font-size280">COVID19</h1> -->
                    <!-- <h3 class="animated shake delay-0.5s">Nueva pandemia que enfrenta nuestro mundo desde finales del 2019</h3> -->
                    <!-- <p class="animated bounceInRight delay-1.2s"><a class="btn btn-lg btn-second" href="/#divContactanos" role="button">Contáctanos</a></p> -->
                    <h1 class="animated swing delay-1s font-size280 text-bold" style="padding-bottom:1em">COVID19</h1>
                    <h3 class="animated bounceInRight1 delay-1.2s">Datos oficiales actualizados acerca de la propagación <br> del COVID19 en Ecuador y en el mundo</h3>
                    <div class="col-md-12 row" style="margin-bottom:12em">
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Mapa mundial</h4>  -->
                            <a href="{{route('mundo-datos1')}}#cl,ec,pe" target="_blank" class="btn btn-lg btn-second" >Mundo</a>      
                        </div>
                        <div class="col-md-4 top40px">
                             <!-- <h4 style="margin-bottom:2em">Mapa Ecuador</h4>  -->              
                            <a href="{{route('ecuador-datos1')}}" target="_blank" class="btn btn-lg btn-second" >Ecuador</a >                                
                        </div>
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Estadísticas</h4>                     -->
                            <a href="{{route('ecuador-provincia', ['provincia' => 'azuay'])}}" target="_blank" class="btn btn-lg btn-second" >Provincias</a >                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="{{asset('images/home2.jpg')}}" style="width:100%;" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1 class="animated swing delay-1s font-size280">COVID19</h1>
                    <h3 class="animated shake delay-0.5s">Nueva pandemia que enfrenta nuestro mundo desde finales del 2019</h3>
                    <p class="animated bounceIn delay-1.2s"><a class="btn btn-lg btn-second" href="/#divContactanos" role="button">Contáctanos</a></p> -->
                    <h1 class="animated swing delay-1s font-size280 text-bold" style="padding-bottom:1em">COVID19</h1>
                    <h3 class="animated bounceInRight1 delay-1.2s">Información oficial actualizada acerca de la propagación <br> del COVID19 en Ecuador y en el mundo</h3>
                    <div class="col-md-12 row" style="margin-bottom:12em">
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Mapa mundial</h4>  -->
                            <a href="{{route('mundo-datos1')}}#cl,ec,pe" target="_blank" class="btn btn-lg btn-second" >Mundo</a>      
                        </div>
                        <div class="col-md-4 top40px">
                             <!-- <h4 style="margin-bottom:2em">Mapa Ecuador</h4>  -->              
                            <a href="{{route('ecuador-datos1')}}" target="_blank" class="btn btn-lg btn-second" >Ecuador</a >                                
                        </div>
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Estadísticas</h4>                     -->
                            <a href="{{route('ecuador-provincia', ['provincia' => 'azuay'])}}" target="_blank" class="btn btn-lg btn-second" >Provincias</a >                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="{{asset('images/home3.jpg')}}" style="width:100%;" alt="Third slide">
            <div class="container">
                <!-- <div class="carousel-caption text-left"> -->
                <div class="carousel-caption">
                    <!-- <h1 class="animated swing delay-1s font-size280">COVID19</h1>
                    <h3 class="animated shake delay-0.5s">Nueva pandemia que enfrenta nuestro mundo desde finales del 2019</h3>
                    <p class="animated bounceInleft delay-1.2s"><a class="btn btn-lg btn-second" href="/#divContactanos" role="button">Contáctanos</a></p> -->
                    <h1 class="animated swing delay-1s font-size280 text-bold" style="padding-bottom:1em">COVID19</h1>
                    <h3 class="animated bounceInRight1 delay-1.2s">Estadísticas oficiales actualizados sobre la propagación <br> del COVID19 en Ecuador y en el mundo</h3>
                    <div class="col-md-12 row" style="margin-bottom:12em">
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Mapa mundial</h4>  -->
                            <a href="{{route('mundo-datos1')}}#cl,ec,pe" target="_blank" class="btn btn-lg btn-second" >Mundo</a>      
                        </div>
                        <div class="col-md-4 top40px">
                             <!-- <h4 style="margin-bottom:2em">Mapa Ecuador</h4>  -->              
                            <a href="{{route('ecuador-datos6')}}" target="_blank" class="btn btn-lg btn-second" >Ecuador</a >                                
                        </div>
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Estadísticas</h4>                     -->
                            <a href="{{route('ecuador-provincia', ['provincia' => 'azuay'])}}" target="_blank" class="btn btn-lg btn-second" >Provincias</a >                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="fourth-slide" src="{{asset('images/home4.jpg')}}" style="width:100%;" alt="Fourth slide">
            <div class="container">
                <div class="carousel-caption">
                    <!-- <h1 class="animated swing delay-1s font-size280">EcuPets</h1>
                    <h3 class="animated shake delay-0.5s">Nueva pandemia que enfrenta nuestro mundo desde finales del 2019</h3>
                    <p class="animated bounceInleft delay-1.2s"><a class="btn btn-lg btn-second" href="/#divContactanos" role="button">Contáctanos</a></p> -->
                    <h1 class="animated swing delay-1s font-size280 text-bold" style="padding-bottom:1em">COVID19</h1>
                    <h3 class="animated bounceInRight1 delay-1.2s">Propagación del COVID19: casos confirmados, <br> fallecidos en Ecuador y en el mundo</h3>
                    <div class="col-md-12 row" style="margin-bottom:12em">
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Mapa mundial</h4>  -->
                            <a href="{{route('mundo-datos1')}}#cl,ec,pe" target="_blank" class="btn btn-lg btn-second" >Mundo</a>      
                        </div>
                        <div class="col-md-4 top40px">
                             <!-- <h4 style="margin-bottom:2em">Mapa Ecuador</h4>  -->              
                            <a href="{{route('ecuador-datos6')}}" target="_blank" class="btn btn-lg btn-second" >Ecuador</a>                                
                        </div>
                        <div class="col-md-4 top40px">
                            <!-- <h4 style="margin-bottom:2em">Estadísticas</h4>                     -->
                            <a href="{{route('ecuador-provincia', ['provincia' => 'azuay'])}}" target="_blank" class="btn btn-lg btn-second" >Provincias</a>                                 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span> 
    </a>
</div>



<div class="container marketing top20px bottom60px">  
    <div class="" align="center">
        <h4><b></b> Nuestra misión es proporcionar estadísticas y datos oficiales <br> acerca de la propagación del COVID19 en Ecuador y en el mundo, <br> en base al número de casos confirmados y fallecidos.</h4>
    </div>
</div>

<div class="container marketing top20px1 bottom60px">  
    <!-- <div class="col-md-8 offset-md-2"> -->
    <div class="col-md-12">
        <div class="card1" align="center">
            <div class="card-header" id="map-header">
                <b>Ecuador - casos confirmados y fallecidos por Covid19 - {{$ult_fecha->fecha}}</b>
            </div>
            <div class="col-md-12 row">
            <div class="col-md-6">
                    <h3><b>Confirmados:</b> {{$ult_fecha->confirmados}}</h3>
                    <h3><b>Recuperados:</b> {{$ult_fecha->recuperados}}</h3>
                    <h3><b>Alta hospitalaria:</b> {{$ult_fecha->alta_hospitalaria}}</h3>
                </div>
                <div class="col-md-6">
                    <h3><b>Descartados:</b> {{$ult_fecha->descartados}}</h3>
                    <h3><b>Fallecidos:</b> {{$ult_fecha->fallecidos}}</h3>
                    <h3><b>Fallecidos Probables:</b> {{$ult_fecha->p_fallecidos}}</h3>
                </div>
            </div>                
        </div>
    </div>
</div>

<div class="container marketing top20px1 bottom60px">  
    <!-- <div class="col-md-8 offset-md-2"> -->
    <div class="col-md-12">
        <div class="card" align="center">
            <div class="card-header" id="map-header">
                <b>Ecuador - casos confirmados y fallecidos por Covid19 - {{$ult_fecha->fecha}}</b>
            </div>
            <div class="top10px" id="mapa-ecuador" style="height:72vh">                        
            </div>
        </div>
    </div>
</div>

<div class="container-fluid marketing">
    <div class="row">
        <div class="col-lg-12 top20px bottom20px text-white" align="center" style="background-color:#990000; background-image: url('images/beneficios_doc.png'); background-size: cover; background-position: center;">
            <h2 class="top20px bottom20px text-white">Gráficos y Datos sobre COVID19</b></h2>

            <div class="row top20px bottom20px">
                <div class="col-md-4 top20px bottom20px">
                    <h4>Mapa mundial de casos</h4> 
                    <a href="{{route('mundo-datos1')}}#cl,ec,pe" target="_blank" class="btn btn-lg btn-second">Abrir</a>                   
                </div>

                <div class="col-md-4 top20px bottom20px">
                    <h4>Mapa de Ecuador de casos</h4>
                    <a href="{{route('ecuador-datos1')}}" target="_blank" class="btn btn-lg btn-second">Abrir</a >                   
                </div>

                <div class="col-md-4 top20px bottom20px">
                    <h4>Datos provinciales</h4>
                    <a href="{{route('ecuador-provincia', ['provincia' => 'azuay'])}}" target="_blank" class="btn btn-lg btn-second">Abrir</a >                   
                </div>

            </div>      
            
            
        </div>
        <!-- <div class="col-lg-6 top20px text-white" align="left" style="background-color:#ff4d4d; background-image: url('images/beneficios_cliente.png'); background-size: cover; background-position: center;">
            <h2 class="top20px botom20px left50px text-black">Beneficios para sus <b class="">Clientes</b></h2>
            
        </div> -->
    </div>
</div>



<div class="container">

    <hr class="featurette-divider">
    
    <!-- <h2 class="col-md-12" align="center">EcuPets</h2> -->

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">El COVID19 se ha venido propagando. <span class="text-muted">RÁPIDAMENTE.</span></h2>
        <!-- <p class="lead">Los veterinarios y clínicas veterinarias pueden llevar un registro de las mascotas atendidas, de los servicios y vacunas suministradas.</p> -->
    </div>
    <div class="col-md-5">
        <!-- <img class="featurette-image img-fluid mx-auto" src="{{asset('images/laptop.png')}}" alt="Generic placeholder image"> -->
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2" style="margin-top:-60px;">
        <h2 class="featurette-heading">Desde finales del año 2019. <span class="text-muted">HASTA LA ACTUALIDAD.</span></h2>
        <!-- <p class="lead">Nuestros usuarios pueden acceder a la información de sus mascotas desde cualquier lugar y/o dispositivo, cuidando de tu mascota en todo momento.</p> -->
    </div>
    <div class="col-md-5 order-md-1">
        <!-- <img class="featurette-image img-fluid mx-auto" src="{{asset('images/responsive.png')}}" alt="Generic placeholder image"> -->
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Ha cobrado 30K+ vidas <span class="text-muted">EN TODO EL MUNDO</span></h2>
        <!-- <p class="lead">Tanto los veterinarios como los usuarios pueden llevar un control total de las mascotas accediento a nuestro sistema.</p> -->
    </div>
    <div class="col-md-5">
        <!-- <img class="featurette-image img-fluid mx-auto" src="{{asset('images/datos.png')}}" alt="Generic placeholder image"> -->
    </div>
    </div>

    <hr class="featurette-divider">

</div>


<!-- <div class="container top100px bottom100px" id="divContactanos"> 
    <div class="row">
        <div class="col-md-12" align="center">
           
            <h2>Contáctanos</h2>

            <form action="/action_page.php" method="get">
                <div class="col-md-12 row" align="center">
                    <div class="col-md-12 top30px">
                        <div class="input-contacto">
                            <input type="text" class="form-control" required="required" placeholder="Nombres" name="nombres">
                        </div>
                    </div>
                    <div class="col-md-12 top10px">	
                        <div class="input-contacto">
                            <input type="email" class="form-control" required="required" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="col-md-12 top10px">	
                        <div class="input-contacto">
                            <input type="number" class="form-control" required="required" placeholder="Teléfono" name="telefono">
                        </div>
                    </div>
                    <div class="col-md-12 top10px">	
                        <div class="input-contacto">
                            <textarea type="text" class="form-control" required="required" placeholder="Asunto" name="asunto" style="height:100px;"></textarea>
                        </div>
                    </div>
                
                    <div class="top20px col-md-12" align="center">
                        <button class="btn btn-lg btn-main">Enviar</button>
                    </div>
                </div>
            </form>
               
        </div>
    </div>
</div> -->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->   

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

  
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection

<input type="hidden" id="fechas" name="fechas" value="{{ $fechas }}">
<input type="hidden" id="ult_fecha" name="ult_fecha" value="{{ $ult_fecha }}">
<input type="hidden" id="provincias" name="provincias" value="{{ $provincias }}">

<script type="text/javascript"> 
    
</script>


@section('scripts')
<script type="text/javascript">



$(document).ready(function() {    

    var fechas = JSON.parse($('#fechas').val());
    var ult_fecha = JSON.parse($('#ult_fecha').val());
    var provincias = JSON.parse($('#provincias').val());
    
    var mapa_ecuador = null;
    

    getDatosEcuador(fechas,ult_fecha,provincias);
                       

    // Create the chart
    mapa_ecuador = Highcharts.mapChart('mapa-ecuador', {
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

});

</script>

<style>
    

</style>

@stop
