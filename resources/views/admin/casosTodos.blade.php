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
                

                <div class="top20px">
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
                                <th>Acciones</th>	                            
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
                                    <td>
                                        <a href="{{route('ver-caso', ['casoId' => $caso->id])}}" target="_blank" class="btn btn-lg btn-second" title="Ver Seed"><i class="fa fa-fw fa-eye"></i></a>                                        
                                    </td>                                                
                                </tr>
                            @endforeach
                        </tbody>    
                    </table>
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

    
  

</script>
@endpush

