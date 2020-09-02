@extends('layouts.app')
@section('content')

<!-- SOURCE -->
<!-- https://jsfiddle.net/highcharts/ehg3zwvy/show -->

<div class="container-fluid">    
            
    <script src="https://code.highcharts.com/7/highcharts.js"></script>
    <script src="https://code.highcharts.com/7/modules/data.js"></script>
    <script src="https://code.highcharts.com/7/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/maps/7/modules/map.js"></script>
    <script src="https://code.highcharts.com/mapdata/custom/world.js"></script>


    <!-- Flag sprites service provided by Martijn Lafeber, https://github.com/lafeber/world-flags-sprite/blob/master/LICENSE -->
    <link rel="stylesheet" type="text/css" href="//github.com/downloads/lafeber/world-flags-sprite/flags32.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    


    <div class="container-fluid bottom30px">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header" id="map-header">
                        Casos confirmados y fallecidos en el mundo por Covid19 - {{$ult_fecha->fecha}} 
                    </div>
                    <div class="card-body" id="container"></div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="info">
                <div class="card">
                    <div class="card-header">
                        <span class="f32"><span id="flag"></span></span>
                        <span class="header-text"></span>
                    </div>
                    <div class="card-header subheader">
                        Click en cada país para ver historial
                    </div>
                    <div class="card-body" id="country-chart">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="top20px bottom30px">
        <small>This visualization is created by the Highcharts team using <a href="https://www.highcharts.com" target="_top">
            Highcharts</a> and data from  <a href="https://github.com/pomber/covid19" target="_top">pomber/covid19</a>.
            </small>
        </div> -->
    </div>

         
    @include('partials.botonesDownShare')
    
    
</div>
@endsection

<style>
    
</style>


<script type="text/javascript"> 
    
</script>

@section('scripts')
<script type="text/javascript">

    const type = 'confirmed';

    const config = {
        confirmed: {
            day0Value: 200,
            header: 'Casos Confirmados Covid-19 - {{$ult_fecha->fecha}}',
            name: 'Casos Confirmados',
            valueSuffix: 'casos confirmados'
        },
        deaths: {
            day0Value: 10,
            header: 'Fallecimientos causados Covid-19',
            name: 'Fallecimientos',
            valueSuffix: 'fallecimientos'
        }
    }[type];

    document.addEventListener('DOMContentLoaded', async function () {
        const countriesResp = await fetch("https://pomber.github.io/covid19/timeseries.json");
        const countries = await countriesResp.json();
        const populationResp = await fetch('https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/world-population.json');
        const population = await populationResp.json();

        let countryChart;

        document.getElementById('map-header').innerHTML = config.header;

        // Add lower case codes to the data set for inclusion in the tooltip.pointFormat
        const mapData = Highcharts.geojson(Highcharts.maps['custom/world']);
        const populationByName = {};
        mapData.forEach(function (country) {
            country.id = country.properties['hc-key']; // for Chart.get()
            country.flag = country.id.replace('UK', 'GB').toLowerCase();

            const pop = population.find(
                c => country.properties['hc-key'].toUpperCase() === c.code
            );
            populationByName[country.name] = pop && pop.z || null;
        });

        // Names used in Highcharts Map Collection
        countries['United States of America'] = countries.US;
        countries['South Korea'] = countries['Korea, South'];
        countries['Czech Republic'] = countries.Czechia;

        let maxValue = 0;
        const data = Object.keys(countries).map(name => {
            const country = countries[name];
            const total = country[country.length - 1][type];
            if (populationByName[name]) {
                const value = total / populationByName[name];
                if (populationByName[name] > 1000) {
                    maxValue = Math.max(value, maxValue);
                }
                return { name, value, total };
            }
            return { name, value: null };
        });


        // Initiate the map chart
        const mapChart = Highcharts.mapChart('container', {

            chart: {
                spacingLeft: 1,
                spacingRight: 1
            },

            title: {
                text: null
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                minColor: '#ffeeee',
                maxColor: '#aa0000',
                max: maxValue
            },

            tooltip: {
                headerFormat: '<b>{point.point.name}</b><br>',
                pointFormat: '<b>{point.total}</b> ' + config.valueSuffix + '<br>' +
                    '<b>{point.value:.2f}</b> por 1000 habitantes<br>',
                footerFormat: '<span style="font-size: 10px">(Click para detalles)</span>'
            },

            legend: {
                title: {
                    text: 'Por 1000 habitantes',
                    style: {
                        fontWeight: 'normal'
                    }
                }
            },

            series: [{
                id: 'map',
                data,
                mapData,
                joinBy: ['name', 'name'],
                name: config.name,
                cursor: 'pointer',
                states: {
                    select: {
                        color: undefined,
                        borderColor: '#333'
                    }
                },
                borderWidth: 1,
                borderColor: 'rgba(0, 0, 0, 0.05)'
            }]
        });

        // Wrap point.select to get to the total selected points
        const onCountryClick = e => {

            // Accumulate using modifier keys, or on touch
            if (e && e.target && e.target.point) {
                e.preventDefault();
                e.target.point.select(
                    null,
                    e.ctrlKey || e.metaKey || e.shiftKey || e.type === 'touchstart'
                );
                if (e.target.point.selected) {
                    e.target.point.graphic.toFront();
                }
            }

            const points = mapChart.getSelectedPoints();
            if (points.length) {
                if (e && e.type === 'touchstart') {
                    //document.querySelector('#reset').style.display = 'block';
                }

                if (points.length === 1) {

                    document.querySelector('#info #flag').style.display = 'block';
                    document.querySelector('#info #flag')
                        .className = 'flag ' + points[0].flag;
                    document.querySelector('#info .header-text').style.paddingLeft = '40px';
                    document.querySelector('#info .header-text').innerHTML = points[0].name;
                    document.querySelector('#info .subheader')
                        .innerHTML = `${config.name}, iniciando el día del caso ${config.day0Value}<br>`;

                    if (e && e.type === 'touchstart') {
                        document.querySelector('#info .subheader')
                            .innerHTML += '<small><em>Seleccionar en el mapa para comparar diferentes países</em></small>';
                    } else {
                        document.querySelector('#info .subheader')
                            .innerHTML += '<small><em>Shift+Click en el mapa para comparar diferentes países</em></small>';
                    }

                } else {
                    document.querySelector('#info #flag').style.display = 'none';
                    document.querySelector('#info .header-text').style.paddingLeft = 0;
                    document.querySelector('#info .header-text').innerHTML = 'Comparando países';
                    document.querySelector('#info .subheader')
                        .innerHTML = `${config.name}, iniciando el día del caso ${config.day0Value}<br>`;
                }

                if (!countryChart) {
                    countryChart = Highcharts.chart('country-chart', {
                        chart: {
                            spacingLeft: 0
                        },
                        credits: {
                            enabled: false
                        },
                        title: {
                            text: null
                        },
                        subtitle: {
                            text: null
                        },
                        xAxis: {
                            crosshair: true,
                            allowDecimals: false,
                            labels: {
                                format: 'Day #{value}'
                            }
                        },
                        yAxis: {
                            title: null,
                            opposite: true
                        },
                        tooltip: {
                            headerFormat: '<small>{series.name}</small><br>',
                            pointFormat: '<b>Day {point.x}: {point.date:%b %e, %Y}</b><br>{point.y} ' + config.valueSuffix
                        },
                        legend: {
                            enabled: false
                        },
                        plotOptions: {
                            series: {
                                animation: {
                                    duration: 50
                                },
                                label: {
                                    enabled: true
                                },
                                marker: {
                                    enabled: false
                                },
                                threshold: 0
                            }
                        }
                    });
                }

                countryChart.series.slice(0).forEach(function (s) {
                    if (
                        !points.find(p => s.options.id === p.id) ||
                        s.type === 'area'
                    ) {
                        s.remove(false);
                    }
                });
                const store = [];
                points.forEach(function (p) {
                    if (countries[p.name]) {
                        if (!countryChart.get(p.id)) {
                            const firstDayAbove200 = countries[p.name].findIndex(
                                point => point[type] >= config.day0Value
                            );
                            const data = countries[p.name]
                                .slice(Math.max(firstDayAbove200 - 1, 0))
                                .map((point, x) => {
                                    const [year, month, date] = point.date.split('-');
                                    const d = Date.UTC(year, month - 1, date);
                                    return {
                                        date: d,
                                        x,
                                        y: point[type]
                                    };
                                });
                            countryChart.addSeries({
                                id: p.id,
                                name: p.name,
                                data,
                                type: points.length > 1 ? 'line' : 'area',
                                color: points.length > 1 ? undefined : '#aa0000',
                                fillColor: points.length > 1 ? undefined : p.color
                            }, false);
                        }
                        store.push(p.id);
                    }
                });
                location.hash = store.join(',');
                countryChart.redraw();

            // No selected points
            } else {
                //document.querySelector('#reset').style.display = 'none';
                document.querySelector('#info #flag').className = '';
                document.querySelector('#info .header-text').innerHTML = '';
                document.querySelector('#info .subheader').innerHTML = '';
                if (countryChart) {
                    countryChart = countryChart.destroy();
                }
            }
        };
        mapChart.container.querySelectorAll('.highcharts-point').forEach(
            graphic => {
                graphic.addEventListener('click', onCountryClick);
                graphic.addEventListener('touchstart', onCountryClick);
            }
        );

        // Pre-select countries
        let selected = 'cn,it,us';
        if (location.hash) {
            selected = location.hash.replace('#', '');
        }
        selected.split(',').forEach(id => {
            if (/^[a-z]{2}$/.test(id)) {
                const country = mapChart.get(id);
                if (country) {
                    mapChart.get(id).select(true, true);
                }
            }
        });
        onCountryClick();

        // Activate button
        /*
        const resetMap = () => {
            mapChart.getSelectedPoints().forEach(p => {
                p.select(false);
            });
            onCountryClick();
        };
        document.getElementById('reset').addEventListener('click', resetMap);
        document.getElementById('reset').addEventListener('touchstart', resetMap);
        */
    });

    
</script>
@stop

<style>
    
</style>

@push('scripts')
<script type="text/javascript">

</script>
@endpush

