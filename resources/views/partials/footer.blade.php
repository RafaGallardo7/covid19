<!-- <div id="contacto" class="bg-color4" style="margin:0; padding:0; background-image: url('/images/footer1.png'); background-repeat:repeat-y;"> -->
<div id="contacto" class="bg-color4" style="margin:0; padding:0;">
    <div class="left30px top30px bottom30px row" style="width:100%;"> 
        <div class="col-md-6 col-sm-6" align="left">    
            <h2 class="bottom40px"><b>{{ __('footer.contacto') }}:</b></h2>    
            <!-- <h5 class="top10px"><b><i class="scaleIcon1-2 fa fa-book"></i> Dirección: </b>Guayas y Remigio Crespo</h5>     -->
            <!-- <h5><b><i class="scaleIcon1-2 fa fa-phone-square"></i> {{ __('footer.telefonos') }}: </b>099376XXXX</h5>      -->
            <h5><b><i class="scaleIcon1-2 fa fa-envelope"></i> Email: </b>info@oneprotech.com</h5>            
            <h2 class="top10px"><b>COVID19</b></h2>
            <h5>Cuenca - Ecuador</h5>        
        </div>
        <div class="col-md-6 col-sm-6 row">
            <div class="col-md-6 col-sm-6">
                <h5 class="pointer top10px"><a class="text-black" href="{{URL::to('/')}}">{{ __('header.inicio') }}</a></h5>
                <!-- <h5 class="pointer top10px"><a class="text-black" href="/quienes-somos">{{ __('header.quienes_somos') }}</a></h5>              -->
                <!-- <h5 class="pointer top10px"><a class="text-black" href="/terminos-y-condiciones" target="_blank">Términos y condiciones</a></h5>  -->
                <h5 class="pointer top10px"><a class="text-black" href="{{ route('login') }}">{{ __('footer.iniciar_sesion') }}</a></h5>
                <p class="font-size130p left top30px">
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
            </div>  
            <div class="col-md-6 col-sm-6">                
                <h5 class="pointer top10px"><a class="text-black" href="/#footer">{{ __('footer.contacto') }}</a></h5> 
                <!-- <h5 class="pointer top10px"><a class="text-black" href="/quienes-somos">Quienes somos</a></h5> -->                
                <!-- <h5 class="pointer top10px"><a class="text-black" href="/terminos-y-condiciones" target="_blank">{{ __('footer.terminos_condiciones') }}</a></h5> -->
                <!-- <h5 class="pointer top10px"><a class="text-black" href="/politicas-privacidad" target="_blank">{{ __('footer.politicas_privacidad') }}</a></h5> -->
                <h5 class="pointer top10px"><a class="text-black" href="{{ route('login') }}">{{ __('footer.iniciar_sesion') }}</a></h5>
                <img src="{{ URL::to('/images/logo_black.png')}}" class="top10pt scaleIcon1-2" alt="Logo EcuPets" height="auto" width="60%">
            </div>
        </div>
    </div>   
</div> 


