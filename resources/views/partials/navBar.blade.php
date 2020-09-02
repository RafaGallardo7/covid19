<?php

  if (!auth()->guest()) {
    $admin = !auth()->guest();
  }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-main">

  <!-- <a class="navbar-brand" href="#">Covid19</a> -->  
  <!-- <a href="/"><img class="logo-navBar" src="{{asset('images/logo2.png')}}" alt="Logo Covid19"></a> -->  
  <img class="logo-navBar" src="{{asset('images/logo.png')}}" alt="Logo Covid19">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
      @if (auth()->guest())                
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/')}}">{{ __('header.inicio') }}</a>
        </li>
      @endif
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
      
      @if (!auth()->guest())               
          

          @if (auth()->check())           
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gestión
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">                  
              <a class="dropdown-item" href="/doctores/lista">Doctores</a>                  
              <a class="dropdown-item" href="/productos/lista">Productos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/servicios/lista">Servicios</a>
              <a class="dropdown-item" href="/vacunas/lista">Vacunas</a>              
            </div>
          </li> -->
          @endif                         
      @endif 
     
      @if (!auth()->guest()) 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ __('header.gestion') }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1"> 
            <a class="dropdown-item" href="/clientes/mascotas">{{ __('header.mis_mascotas') }}</a>                  
            <!-- <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="/servicios/lista">Servicios</a>             -->          
        </div>
      </li>
      @endif 


     

         
        <li class="nav-item dropdown" style="padding-left:20px; padding-right:20px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Datos
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">  
          <a href="{{route('mundo-datos1')}}#cl,ec,pe" target="" class="dropdown-item" >Mapa Mundial</a>       
          <a href="{{route('ecuador-datos1')}}" target="" class="dropdown-item" >Datos Ecuador</a>                                
          <!-- <a href="{{route('ecuador-datos2')}}" target="" class="dropdown-item" >Datos Ecuador2</a>                             
          <a href="{{route('ecuador-datos3')}}" target="" class="dropdown-item" >Datos Ecuador3</a>                                
          <a href="{{route('ecuador-datos4')}}" target="" class="dropdown-item" >Datos Ecuador4</a>  
          <a href="{{route('ecuador-datos5')}}" target="" class="dropdown-item" >Datos Ecuador5</a>                                 -->
          
          <a href="{{route('ecuador-region', ['region' => 'costa'])}}" target="" class="dropdown-item">Regiones Ecuador </a>
          <a href="{{route('ecuador-provincia', ['provincia' => 'azuay'])}}" target="" class="dropdown-item">Provincias Ecuador </a>
          </div>
        </li>  
        <!-- <li class="nav-item"><a class="nav-link" href="/quienes-somos">{{ __('header.quienes_somos') }}</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Servicios</a></li>         -->
        <!-- <li class="nav-item"><a class="nav-link" href="/#footer">{{ __('header.contacto') }}</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('header.iniciar_sesion') }}</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarme</a></li> -->
      @guest   

      @else          
        <li class="nav-item dropdown">            
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user btn-sm"></i>                 
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"                  
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                    
                {{ __('header.cerrar_sesion') }}
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{URL::to('/usuarios/editar/'.Auth::user()->id)}}">{{ __('header.mi_perfil') }}</a>
            <!-- <a class="dropdown-item" href="{{URL::to('/doctor/reporte/'.Auth::user()->id)}}">Configuraciones</a> -->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </li>            
      @endguest  
            

      @if (auth()->guest()) 
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ (app()->getLocale() == 'es') ? 'ES' : 'EN' }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1"> 
        <a href="{{ url('locale/es') }}" class="dropdown-item"><i class="fa fa-language"></i> {{ __('header.espanol') }}</a>
        <a href="{{ url('locale/en') }}" class="dropdown-item"><i class="fa fa-language"></i> {{ __('header.ingles') }}</a>
        </div>
      </li>       -->
      @endif
      <p class="font-size130p left top10px">
          <a class="text-black" href="https://www.facebook.com/totalstats/" target="_blank"> 
              <i class="scaleIcon1-2 fa fa-facebook">
              </i>
          </a>
          <a class="text-black" href="https://www.instagram.com/totalstatsec/" target="_blank">
              <i class="scaleIcon1-2 fa fa-instagram left10px">
              </i>
          </a>
          <a class="text-black" href="https://twitter.com/bignewtech/" target="_blank">
              <i class="scaleIcon1-2 fa fa-twitter left10px">
              </i>
          </a>
      </p>

    </ul>

  </div>
</nav>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <!-- <strong>ATENCIÓN!</strong> Los datos cantonales utilizados en el sistema han sido actualizados hasta el 23-04-2020, debido a que www.gestionderiesgos.com.ec no ha compartido nuevos datos cantonales. -->
  <strong>ATENCIÓN!</strong> La reducción en número de casos confirmados provinciales y cantonales se debe a que desde el 27-04-2020 solo se toman en cuenta las pruebas realizadas con el método PCR.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



