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
            
            
            
            <div class="top20px col-12 col-md-12" id="info">
                <div class="card">                    
                    <div class="card-header" id="label_chart1">
                        <!-- <label id="label_provincia">Click en cada provincia para ver historial</label>  -->
                        <b>Ecuador - Casos Confirmados y Fallecidos por Covid19 - {{$ult_fecha->fecha}}</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive top20px">
                            <table id="tableCasos" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
                                <thead class="text-secondary">
                                    <tr>        
                                        <th>Provincia</th>	
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				
                                            <th style="white-space:nowrap;">{{$dato->fecha}}</th>
                                        @endforeach 
                                    </tr>
                                </thead>
                                <tbody class="font-size90">
                                    <tr>
                                        <td>Azuay</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_azuay}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_azuay}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr>   
                                    <tr>
                                        <td>Bolívar</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_bolivar}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_bolivar}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Cañar</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_canar}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_canar}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Carchi</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_carchi}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_carchi}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Chimborazo</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_chimborazo}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_chimborazo}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Cotopaxi</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_cotopaxi}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_cotopaxi}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>El Oro</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_el_oro}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_el_oro}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Esmeraldas</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_esmeraldas}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_esmeraldas}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Galápagos</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_galapagos}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_galapagos}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Guayas</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_guayas}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_guayas}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Imbabura</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_imbabura}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_imbabura}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Loja</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_loja}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_loja}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Los Ríos</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_los_rios}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_los_rios}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Manabí</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_manabi}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_manabi}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Morona Santiago</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_morona}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_morona}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Napo</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_napo}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_napo}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Orellana</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_orellana}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_orellana}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Pastaza</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_pastaza}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_pastaza}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Pichincha</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_pichincha}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_pichincha}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Santa Elena</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_santa_elena}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_santa_elena}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Sto. Domingo Tsáchilas</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_santo_domingo}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_santo_domingo}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Sucumbíos</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_sucumbios}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_sucumbios}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Tungurahua</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_tungurahua}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_tungurahua}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr> 
                                    <tr>
                                        <td>Zamora Chinchipe</td>                                                
                                        @foreach($fechas->reverse() as $index => $dato)                                                                            			                                				                                                                                                                                                                                                                                                                                            
                                            <td>
                                                <i class="fa fa-check-square text-red"></i>:{{$dato->c_zamora}}
                                                <br>
                                                <i class="fa fa-user-times"></i>:{{$dato->f_zamora}}                                                                                                	                                                
                                            </td>                                               
                                        @endforeach 
                                    </tr>                                 
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

    $(document).ready(function() {
        $('#tableCasos').DataTable({
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
    
               
   
  
  

    

    
        
     
</script>
@stop

<style>
   

</style>

@push('scripts')
<script type="text/javascript">

</script>
@endpush

