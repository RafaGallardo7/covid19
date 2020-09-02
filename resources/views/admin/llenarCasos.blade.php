@extends('layouts.app')
@section('content')


<div class="container-fluid">                    

    
    <div class="row">       
        <div class="top20px col-md-12" align="center">          
            
        </div>
    </div>

    

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" align="center">
                <a href="{{route('home')}}" class="btn btn-primary">Home</a>
                <a href="#" id="duplicar_data" class="btn btn-secondary">GENERAR DATOS DEL DÍA</a>
                <h2 class="top20px">{{ $titulo }}</h2>
                <a href="https://www.gestionderiesgos.gob.ec/informes-de-situacion-covid-19-desde-el-13-de-marzo-del-2020/" target="_blank">Gestión de Riesgos</a>
                <br/>
                <!-- <label><b>SOSPECHOSOS</b> === MUESTRAS - CONFIRMADOS - DESCARTADOS - ALTA HOSPITALARIA</label> -->

                <table id="tableCasos" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%">
                    <thead class="text-secondary">
                        <tr>        
                            <th>Fecha</th>	                            
                            <th>Muestras</th>	                            
                            <th>Confirmados</th>	                            
                            <th>Descartados</th>	                            
                            <th>Sospechosos</th>	                            
                            <th>Fallecidos</th>	                            
                            <th>Fallecidos propables</th>	                            
                            <th>Recuperados</th>	                            
                            <th>Alta hospitalaria</th>	                            
                        </tr>
                    </thead>
                    <tbody class="font-size90">
                        @foreach($all_casos->reverse() as $index => $caso)      
                            <tr>
                                <td>{{ $caso->fecha }}</td>                                                
                                <td>{{ $caso->muestras }}</td> 
                                <td>{{ $caso->confirmados }}</td>                                                
                                <td>{{ $caso->descartados }}</td>                                                
                                <td>{{ $caso->sospechosos }}</td>                                                
                                <td>{{ $caso->fallecidos }}</td>                                                
                                <td>{{ $caso->p_fallecidos }}</td>                                                
                                <td>{{ $caso->recuperados }}</td>                                                
                                <td>{{ $caso->alta_hospitalaria }}</td>                                                
                            </tr>
                        @endforeach
                    </tbody>    
                </table>
            </div>

            

            <div class="top40px bottom50px col-md-12" align="center">
                <div class="row">
                    <form action="{{route('casos-covid19')}}" method="POST" class="col-md-12 row">                        
                        <input type="hidden" name="caso_id" value="{{ $ult_fecha['id'] }}"/>
                        @foreach($ult_fecha as $index => $caso)     
                            <?php
                                $sos = strpos($index, 's_');
                                $des = strpos($index, 'd_');
                                $rec = strpos($index, 'r_');                            
                            ?>               
                            @if($index != 'id' && !($sos === 0) && !($rec === 0) && $index != 'created_at' && $index != 'updated_at' && $index != 'sospechosos' && $index != 'seed' && $index != 'cero_once_meses' && $index != 'uno_cuatro' && $index != 'cinco_nueve' && $index != 'diez_catorce' && $index != 'quince_dieznueve' && $index != 'veinte_cuatronueve' && $index != 'cincuenta_seiscuatro' && $index != 'mas_seiscinco' && $index != 'cerco' && $index != 'hombres' && $index != 'mujeres' && $index != 'd_azuay' && $index != 'd_bolivar' && $index != 'd_canar' && $index != 'd_carchi' && $index != 'd_chimborazo' && $index != 'd_cotopaxi' && $index != 'd_el_oro' && $index != 'd_esmeraldas' && $index != 'd_galapagos' && $index != 'd_guayas' && $index != 'd_imbabura' && $index != 'd_loja' && $index != 'd_los_rios' && $index != 'd_manabi' && $index != 'd_morona' && $index != 'd_napo' && $index != 'd_orellana' && $index != 'd_pastaza' && $index != 'd_pichincha' && $index != 'd_santa_elena' && $index != 'd_santo_domingo' && $index != 'd_sucumbios' && $index != 'd_tungurahua' && $index != 'd_zamora')                            
                                <div class="top20px col-md-2 col-sm-3 col-xs-6" align="left">
                                    <label>{{ $index }}</label>                                    
                                    <input class="form-control" name="{{ $index }}" id="{{ $index }}" {{ ($index == 'fecha') ? 'disabled1' : '' }} value="{{ $caso }}"/>                                    
                                </div>                            
                            @endif
                        @endforeach

                        <div class="top50px bottom20px col-md-12" align="center">
                            <button type="submit" class="btn btn-success btn-lg" style="height:100px; width:400px;">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
                   
        </div>
    </div>    

    <div class="modal" id="modal-duplicar">
        <div class="modal-dialog modal-md">
            <div class="modal-content">                
            
                <div class="modal-header card-header bg-dark text-white">
                    <h5 id="titulo-modal-eliminar" class="modal-title">DUPLICAR DATA</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                                        
                <div class="modal-body">
                    <h6 id="mensaje-modal-eliminar" class="" align="center">Esta seguro de duplicar los datos?</h6>

                    <!-- <div class="top20px col-md-12" align="center">
                        <label>Nueva Fecha</label>
                        <input class="forn-control" name="fecha_nueva" value="{{ $fecha_hoy }}"/>
                    </div> -->
                </div>
                                        
                <div class="modal-footer">
                    <a href="{{route('duplicar-casos')}}" id="duplicar-item" type="button" class="btn btn-second">
                        <i class="fa fa-fw fa-remove"></i> Sí
                    </a>   
                    <button type="button" class="btn btn-second" data-dismiss="modal">
                        <i class="fa fa-fw fa-remove"></i> No
                    </button>                                          
                </div>                    
            </div>
        </div>
    </div>
    

   
                   
</div>
@endsection

<style>
    
</style>




<script type="text/javascript"> 
    
</script>

@section('scripts')
<script type="text/javascript">   


</script>
@stop

<style>
   

</style>

@push('scripts')
<script type="text/javascript">

    $("#duplicar_data").click(function(e) {
        e.preventDefault();

        $('#modal-duplicar').modal('show');
    });
  

</script>
@endpush

