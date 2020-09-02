@extends('layouts.app')
@section('content')


<div class="container-fluid">                    

    
    <div class="row">       
        <div class="top20px col-md-12" align="center">          
            @include('partials.botonesTopDatos')
        </div>
    </div>

    

    <div class="top20px container-fluid">
        <div class="row">
            <div class="col-md-12" align="center">
                <div class='tableauPlaceholder' id='viz1590034139175' style='position: relative'><noscript><a href='http:&#47;&#47;oneprotech.com&#47;covid19&#47;ecuador&#47;datos8'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Aislamientodomiciliariorecuperadosfallecidoshospitalizadosestablesyhospitalizadosconpronsticoreservado&#47;Dashboard2&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Aislamientodomiciliariorecuperadosfallecidoshospitalizadosestablesyhospitalizadosconpronsticoreservado&#47;Dashboard2' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ai&#47;Aislamientodomiciliariorecuperadosfallecidoshospitalizadosestablesyhospitalizadosconpronsticoreservado&#47;Dashboard2&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1590034139175');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='1120px';vizElement.style.minHeight='587px';vizElement.style.maxHeight='627px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='670px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
            </div>
                   
        </div>
    </div>    

    <div class="container-fluid bottom50px">
        <div class="row">
            <div class="col-md-12" align="center">
                <div class='tableauPlaceholder' id='viz1588378029002' style='position: relative'><noscript><a href='https:&#47;&#47;oneprotech.com&#47;covid19&#47;ecuador&#47;datos8'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Mu&#47;MuestrastomadascasosconfirmadosfallecidosfallecidosprobablessospechososydescartadosenEcuador&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='MuestrastomadascasosconfirmadosfallecidosfallecidosprobablessospechososydescartadosenEcuador&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Mu&#47;MuestrastomadascasosconfirmadosfallecidosfallecidosprobablessospechososydescartadosenEcuador&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1588378029002');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='1020px';vizElement.style.minHeight='587px';vizElement.style.maxHeight='627px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='727px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
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
  
</script>
@stop

<style>
   

</style>

@push('scripts')
<script type="text/javascript">

</script>
@endpush

