<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCasos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->bigIncrements('id');   
            $table->date('fecha');        
            $table->integer('confirmados')->length(8)->default(0);
            $table->integer('c_pcr')->length(8)->default(0);
            $table->integer('c_rapidas')->length(8)->default(0);                     
            $table->integer('sospechosos')->length(8)->default(0);                     
            $table->integer('descartados')->length(8)->default(0);                     
            $table->integer('d_pcr')->length(8)->default(0);
            $table->integer('d_rapidas')->length(8)->default(0);                     
            $table->integer('fallecidos')->length(8)->default(0);
            $table->integer('p_fallecidos')->length(8)->default(0);                     
            $table->integer('recuperados')->length(8)->default(0);                     
            $table->integer('alta_hospitalaria')->length(8)->default(0);
            $table->integer('alta_epidemiologica')->length(8)->default(0);                     
            $table->integer('domiciliario')->length(8)->default(0);                     
            $table->integer('hosp_estables')->length(8)->default(0);                     
            $table->integer('hosp_reservado')->length(8)->default(0);                     
            $table->integer('cerco')->length(8)->default(0);                     
            $table->integer('muestras')->length(8)->default(0);                     
            $table->integer('cero_once_meses')->length(8)->default(0);      
            $table->integer('uno_cuatro')->length(8)->default(0);      
            $table->integer('cinco_nueve')->length(8)->default(0);      
            $table->integer('diez_catorce')->length(8)->default(0);      
            $table->integer('quince_dieznueve')->length(8)->default(0);      
            $table->integer('veinte_cuatronueve')->length(8)->default(0);      
            $table->integer('cincuenta_seiscuatro')->length(8)->default(0);      
            $table->integer('mas_seiscinco')->length(8)->default(0); 
            $table->integer('hombres')->length(8)->default(0); 
            $table->integer('mujeres')->length(8)->default(0);      
            $table->decimal('p_cero_once_meses',5,2)->nullable();      
            $table->decimal('p_uno_cuatro',5,2)->nullable();      
            $table->decimal('p_cinco_nueve',5,2)->nullable();      
            $table->decimal('p_diez_catorce',5,2)->nullable();      
            $table->decimal('p_quince_dieznueve',5,2)->nullable();      
            $table->decimal('p_veinte_cuatronueve',5,2)->nullable();      
            $table->decimal('p_cincuenta_seiscuatro',5,2)->nullable();      
            $table->decimal('p_mas_seiscinco',5,2)->nullable();                  
            $table->decimal('p_hombres',5,2)->nullable();
            $table->decimal('p_mujeres',5,2)->nullable();
            $table->text('seed')->nullable();             

            $table->integer('c_azuay')->length(8)->default(0); 
            $table->integer('c_bolivar')->length(8)->default(0); 
            $table->integer('c_canar')->length(8)->default(0); 
            $table->integer('c_carchi')->length(8)->default(0); 
            $table->integer('c_chimborazo')->length(8)->default(0); 
            $table->integer('c_cotopaxi')->length(8)->default(0); 
            $table->integer('c_el_oro')->length(8)->default(0); 
            $table->integer('c_esmeraldas')->length(8)->default(0); 
            $table->integer('c_galapagos')->length(8)->default(0); 
            $table->integer('c_guayas')->length(8)->default(0); 
            $table->integer('c_imbabura')->length(8)->default(0); 
            $table->integer('c_loja')->length(8)->default(0); 
            $table->integer('c_los_rios')->length(8)->default(0); 
            $table->integer('c_manabi')->length(8)->default(0); 
            $table->integer('c_morona')->length(8)->default(0); 
            $table->integer('c_napo')->length(8)->default(0); 
            $table->integer('c_orellana')->length(8)->default(0); 
            $table->integer('c_pastaza')->length(8)->default(0); 
            $table->integer('c_pichincha')->length(8)->default(0); 
            $table->integer('c_santa_elena')->length(8)->default(0); 
            $table->integer('c_santo_domingo')->length(8)->default(0); 
            $table->integer('c_sucumbios')->length(8)->default(0); 
            $table->integer('c_tungurahua')->length(8)->default(0); 
            $table->integer('c_zamora')->length(8)->default(0); 

            $table->integer('f_azuay')->length(8)->default(0); 
            $table->integer('f_bolivar')->length(8)->default(0); 
            $table->integer('f_canar')->length(8)->default(0); 
            $table->integer('f_carchi')->length(8)->default(0); 
            $table->integer('f_chimborazo')->length(8)->default(0); 
            $table->integer('f_cotopaxi')->length(8)->default(0); 
            $table->integer('f_el_oro')->length(8)->default(0); 
            $table->integer('f_esmeraldas')->length(8)->default(0); 
            $table->integer('f_galapagos')->length(8)->default(0); 
            $table->integer('f_guayas')->length(8)->default(0); 
            $table->integer('f_imbabura')->length(8)->default(0); 
            $table->integer('f_loja')->length(8)->default(0); 
            $table->integer('f_los_rios')->length(8)->default(0); 
            $table->integer('f_manabi')->length(8)->default(0); 
            $table->integer('f_morona')->length(8)->default(0); 
            $table->integer('f_napo')->length(8)->default(0); 
            $table->integer('f_orellana')->length(8)->default(0); 
            $table->integer('f_pastaza')->length(8)->default(0); 
            $table->integer('f_pichincha')->length(8)->default(0); 
            $table->integer('f_santa_elena')->length(8)->default(0); 
            $table->integer('f_santo_domingo')->length(8)->default(0); 
            $table->integer('f_sucumbios')->length(8)->default(0); 
            $table->integer('f_tungurahua')->length(8)->default(0); 
            $table->integer('f_zamora')->length(8)->default(0); 

            $table->integer('s_azuay')->length(8)->default(0); 
            $table->integer('s_bolivar')->length(8)->default(0); 
            $table->integer('s_canar')->length(8)->default(0); 
            $table->integer('s_carchi')->length(8)->default(0); 
            $table->integer('s_chimborazo')->length(8)->default(0); 
            $table->integer('s_cotopaxi')->length(8)->default(0); 
            $table->integer('s_el_oro')->length(8)->default(0); 
            $table->integer('s_esmeraldas')->length(8)->default(0); 
            $table->integer('s_galapagos')->length(8)->default(0); 
            $table->integer('s_guayas')->length(8)->default(0); 
            $table->integer('s_imbabura')->length(8)->default(0); 
            $table->integer('s_loja')->length(8)->default(0); 
            $table->integer('s_los_rios')->length(8)->default(0); 
            $table->integer('s_manabi')->length(8)->default(0); 
            $table->integer('s_morona')->length(8)->default(0); 
            $table->integer('s_napo')->length(8)->default(0); 
            $table->integer('s_orellana')->length(8)->default(0); 
            $table->integer('s_pastaza')->length(8)->default(0); 
            $table->integer('s_pichincha')->length(8)->default(0); 
            $table->integer('s_santa_elena')->length(8)->default(0); 
            $table->integer('s_santo_domingo')->length(8)->default(0); 
            $table->integer('s_sucumbios')->length(8)->default(0); 
            $table->integer('s_tungurahua')->length(8)->default(0); 
            $table->integer('s_zamora')->length(8)->default(0); 

            $table->integer('d_azuay')->length(8)->default(0); 
            $table->integer('d_bolivar')->length(8)->default(0); 
            $table->integer('d_canar')->length(8)->default(0); 
            $table->integer('d_carchi')->length(8)->default(0); 
            $table->integer('d_chimborazo')->length(8)->default(0); 
            $table->integer('d_cotopaxi')->length(8)->default(0); 
            $table->integer('d_el_oro')->length(8)->default(0); 
            $table->integer('d_esmeraldas')->length(8)->default(0); 
            $table->integer('d_galapagos')->length(8)->default(0); 
            $table->integer('d_guayas')->length(8)->default(0); 
            $table->integer('d_imbabura')->length(8)->default(0); 
            $table->integer('d_loja')->length(8)->default(0); 
            $table->integer('d_los_rios')->length(8)->default(0); 
            $table->integer('d_manabi')->length(8)->default(0); 
            $table->integer('d_morona')->length(8)->default(0); 
            $table->integer('d_napo')->length(8)->default(0); 
            $table->integer('d_orellana')->length(8)->default(0); 
            $table->integer('d_pastaza')->length(8)->default(0); 
            $table->integer('d_pichincha')->length(8)->default(0); 
            $table->integer('d_santa_elena')->length(8)->default(0); 
            $table->integer('d_santo_domingo')->length(8)->default(0); 
            $table->integer('d_sucumbios')->length(8)->default(0); 
            $table->integer('d_tungurahua')->length(8)->default(0); 
            $table->integer('d_zamora')->length(8)->default(0); 

            $table->integer('r_azuay')->length(8)->default(0); 
            $table->integer('r_bolivar')->length(8)->default(0); 
            $table->integer('r_canar')->length(8)->default(0); 
            $table->integer('r_carchi')->length(8)->default(0); 
            $table->integer('r_chimborazo')->length(8)->default(0); 
            $table->integer('r_cotopaxi')->length(8)->default(0); 
            $table->integer('r_el_oro')->length(8)->default(0); 
            $table->integer('r_esmeraldas')->length(8)->default(0); 
            $table->integer('r_galapagos')->length(8)->default(0); 
            $table->integer('r_guayas')->length(8)->default(0); 
            $table->integer('r_imbabura')->length(8)->default(0); 
            $table->integer('r_loja')->length(8)->default(0); 
            $table->integer('r_los_rios')->length(8)->default(0); 
            $table->integer('r_manabi')->length(8)->default(0); 
            $table->integer('r_morona')->length(8)->default(0); 
            $table->integer('r_napo')->length(8)->default(0); 
            $table->integer('r_orellana')->length(8)->default(0); 
            $table->integer('r_pastaza')->length(8)->default(0); 
            $table->integer('r_pichincha')->length(8)->default(0); 
            $table->integer('r_santa_elena')->length(8)->default(0); 
            $table->integer('r_santo_domingo')->length(8)->default(0); 
            $table->integer('r_sucumbios')->length(8)->default(0); 
            $table->integer('r_tungurahua')->length(8)->default(0); 
            $table->integer('r_zamora')->length(8)->default(0); 

            //Azuay
            $table->integer('cuenca')->length(6)->default(0); 
            $table->integer('ponce_enriquez')->length(6)->default(0); 
            $table->integer('chordeleg')->length(6)->default(0); 
            $table->integer('el_pan')->length(6)->default(0); 
            $table->integer('giron')->length(6)->default(0); 
            $table->integer('guachapala')->length(6)->default(0); 
            $table->integer('gualaceo')->length(6)->default(0); 
            $table->integer('nabon')->length(6)->default(0); 
            $table->integer('ona')->length(6)->default(0); 
            $table->integer('paute')->length(6)->default(0); 
            $table->integer('pucara')->length(6)->default(0); 
            $table->integer('san_fernando')->length(6)->default(0); 
            $table->integer('santa_isabel')->length(6)->default(0); 
            $table->integer('sevilla_oro')->length(6)->default(0); 
            $table->integer('sigsig')->length(6)->default(0); 
            //Bolivar
            $table->integer('guaranda')->length(6)->default(0); 
            $table->integer('caluma')->length(6)->default(0); 
            $table->integer('chillanes')->length(6)->default(0); 
            $table->integer('chimbo')->length(6)->default(0); 
            $table->integer('echeandia')->length(6)->default(0); 
            $table->integer('las_naves')->length(6)->default(0); 
            $table->integer('san_miguel')->length(6)->default(0); 
            //Canar
            $table->integer('azogues')->length(6)->default(0); 
            $table->integer('biblian')->length(6)->default(0); 
            $table->integer('canar')->length(6)->default(0); 
            $table->integer('deleg')->length(6)->default(0); 
            $table->integer('el_tambo')->length(6)->default(0); 
            $table->integer('la_troncal')->length(6)->default(0); 
            $table->integer('suscal')->length(6)->default(0); 
            //Carchi
            $table->integer('tulcan')->length(6)->default(0); 
            $table->integer('bolivar1')->length(6)->default(0); 
            $table->integer('espejo')->length(6)->default(0); 
            $table->integer('mira')->length(6)->default(0); 
            $table->integer('montufar')->length(6)->default(0); 
            $table->integer('san_pedro')->length(6)->default(0); 
            //Chimborazo
            $table->integer('riobamba')->length(6)->default(0); 
            $table->integer('alausi')->length(6)->default(0); 
            $table->integer('chambo')->length(6)->default(0); 
            $table->integer('chunchi')->length(6)->default(0); 
            $table->integer('colta')->length(6)->default(0); 
            $table->integer('cumanda')->length(6)->default(0); 
            $table->integer('guamote')->length(6)->default(0); 
            $table->integer('guano')->length(6)->default(0); 
            $table->integer('pallatanga')->length(6)->default(0); 
            $table->integer('penipe')->length(6)->default(0); 
            //Cotopaxi
            $table->integer('latacunga')->length(6)->default(0); 
            $table->integer('la_mana')->length(6)->default(0); 
            $table->integer('pangua')->length(6)->default(0); 
            $table->integer('pujili')->length(6)->default(0); 
            $table->integer('salcedo')->length(6)->default(0); 
            $table->integer('saquicili')->length(6)->default(0); 
            $table->integer('sigchos')->length(6)->default(0); 
            //El Oro
            $table->integer('machala')->length(6)->default(0); 
            $table->integer('arenillas')->length(6)->default(0); 
            $table->integer('atahualpa')->length(6)->default(0); 
            $table->integer('balsas')->length(6)->default(0); 
            $table->integer('chilla')->length(6)->default(0); 
            $table->integer('el_guabo')->length(6)->default(0); 
            $table->integer('huaquillas')->length(6)->default(0); 
            $table->integer('las_lajas')->length(6)->default(0); 
            $table->integer('marcabeli')->length(6)->default(0); 
            $table->integer('pasaje')->length(6)->default(0); 
            $table->integer('pinas')->length(6)->default(0); 
            $table->integer('portovelo')->length(6)->default(0); 
            $table->integer('santa_rosa')->length(6)->default(0); 
            $table->integer('zaruma')->length(6)->default(0); 
            //Esmeraldas
            $table->integer('esmeraldas')->length(6)->default(0); 
            $table->integer('atacames')->length(6)->default(0); 
            $table->integer('eloy_alfaro')->length(6)->default(0); 
            $table->integer('muisne')->length(6)->default(0); 
            $table->integer('quininde')->length(6)->default(0); 
            $table->integer('rioverde')->length(6)->default(0); 
            $table->integer('san_lorenzo')->length(6)->default(0); 
            //Galapagos
            $table->integer('san_cristobal')->length(6)->default(0); 
            $table->integer('isabela')->length(6)->default(0); 
            $table->integer('santa_cruz')->length(6)->default(0); 
            //Guayas
            $table->integer('guayaquil')->length(6)->default(0); 
            $table->integer('baquerizo_moreno')->length(6)->default(0); 
            $table->integer('balao')->length(6)->default(0); 
            $table->integer('balzar')->length(6)->default(0); 
            $table->integer('colimes')->length(6)->default(0); 
            $table->integer('daule')->length(6)->default(0); 
            $table->integer('duran')->length(6)->default(0); 
            $table->integer('el_empalme')->length(6)->default(0); 
            $table->integer('el_triunfo')->length(6)->default(0); 
            $table->integer('general_antonio')->length(6)->default(0); 
            $table->integer('isidro_ayora')->length(6)->default(0); 
            $table->integer('sargentillo')->length(6)->default(0); 
            $table->integer('marcelino')->length(6)->default(0); 
            $table->integer('milagro')->length(6)->default(0); 
            $table->integer('naranjal')->length(6)->default(0); 
            $table->integer('naranjito')->length(6)->default(0); 
            $table->integer('nobol')->length(6)->default(0); 
            $table->integer('palestina')->length(6)->default(0); 
            $table->integer('pedro_carbo')->length(6)->default(0); 
            $table->integer('playas')->length(6)->default(0); 
            $table->integer('salitre')->length(6)->default(0); 
            $table->integer('samborondon')->length(6)->default(0); 
            $table->integer('santa_lucia')->length(6)->default(0); 
            $table->integer('simon_bolivar')->length(6)->default(0); 
            $table->integer('yaguachi')->length(6)->default(0); 
            $table->integer('el_piedrero')->length(6)->default(0); 
            //Imbabura
            $table->integer('ibarra')->length(6)->default(0); 
            $table->integer('antonio_ante')->length(6)->default(0); 
            $table->integer('cotacachi')->length(6)->default(0); 
            $table->integer('otavalo')->length(6)->default(0); 
            $table->integer('pimampiro')->length(6)->default(0); 
            $table->integer('urcuqui')->length(6)->default(0); 
            $table->integer('las_golondrinas')->length(6)->default(0); 
            //Loja
            $table->integer('loja')->length(6)->default(0); 
            $table->integer('calvas')->length(6)->default(0); 
            $table->integer('catamayo')->length(6)->default(0); 
            $table->integer('celica')->length(6)->default(0); 
            $table->integer('chaguarpamba')->length(6)->default(0); 
            $table->integer('espindola')->length(6)->default(0); 
            $table->integer('gonzanama')->length(6)->default(0); 
            $table->integer('macara')->length(6)->default(0); 
            $table->integer('olmedo1')->length(6)->default(0); 
            $table->integer('paltas')->length(6)->default(0); 
            $table->integer('pindal')->length(6)->default(0); 
            $table->integer('puyango')->length(6)->default(0); 
            $table->integer('quilanga')->length(6)->default(0); 
            $table->integer('saraguro')->length(6)->default(0); 
            $table->integer('sozoranga')->length(6)->default(0); 
            $table->integer('zapotillo')->length(6)->default(0); 
            //Los Rios
            $table->integer('babahoyo')->length(6)->default(0); 
            $table->integer('baba')->length(6)->default(0); 
            $table->integer('buena_fe')->length(6)->default(0); 
            $table->integer('mocache')->length(6)->default(0); 
            $table->integer('montalvo')->length(6)->default(0); 
            $table->integer('palenque')->length(6)->default(0); 
            $table->integer('puebloviejo')->length(6)->default(0); 
            $table->integer('quevedo')->length(6)->default(0); 
            $table->integer('quinsaloma')->length(6)->default(0); 
            $table->integer('urdaneta')->length(6)->default(0); 
            $table->integer('valencia')->length(6)->default(0); 
            $table->integer('ventanas')->length(6)->default(0); 
            $table->integer('vinces')->length(6)->default(0); 
            //Manabi
            $table->integer('portoviejo')->length(6)->default(0); 
            $table->integer('veintecuatro_mayo')->length(6)->default(0); 
            $table->integer('bolivar2')->length(6)->default(0); 
            $table->integer('chone')->length(6)->default(0); 
            $table->integer('el_carmen')->length(6)->default(0); 
            $table->integer('flavio_alfaro')->length(6)->default(0); 
            $table->integer('jama')->length(6)->default(0); 
            $table->integer('jaramijo')->length(6)->default(0); 
            $table->integer('jipijapa')->length(6)->default(0); 
            $table->integer('junin')->length(6)->default(0); 
            $table->integer('manta')->length(6)->default(0); 
            $table->integer('montecristi')->length(6)->default(0); 
            $table->integer('olmedo2')->length(6)->default(0); 
            $table->integer('pajan')->length(6)->default(0); 
            $table->integer('pedernales')->length(6)->default(0); 
            $table->integer('pichincha')->length(6)->default(0); 
            $table->integer('puerto_lopez')->length(6)->default(0); 
            $table->integer('rocafuerte')->length(6)->default(0); 
            $table->integer('san_vicente')->length(6)->default(0); 
            $table->integer('santa_ana')->length(6)->default(0); 
            $table->integer('sucre')->length(6)->default(0); 
            $table->integer('tosagua')->length(6)->default(0); 
            $table->integer('manga_cura')->length(6)->default(0); 
            //Morona Santiago
            $table->integer('morona')->length(6)->default(0); 
            $table->integer('gualaquiza')->length(6)->default(0); 
            $table->integer('huamboya')->length(6)->default(0); 
            $table->integer('limon')->length(6)->default(0); 
            $table->integer('logrono')->length(6)->default(0); 
            $table->integer('pablo_sexto')->length(6)->default(0); 
            $table->integer('palora')->length(6)->default(0); 
            $table->integer('juan_bosco')->length(6)->default(0); 
            $table->integer('mendez')->length(6)->default(0); 
            $table->integer('sucua')->length(6)->default(0); 
            $table->integer('taisha')->length(6)->default(0); 
            $table->integer('tiwintza')->length(6)->default(0); 
            //Napo
            $table->integer('tena')->length(6)->default(0); 
            $table->integer('archidona')->length(6)->default(0); 
            $table->integer('carlos_julio')->length(6)->default(0); 
            $table->integer('el_chaco')->length(6)->default(0); 
            $table->integer('quijos')->length(6)->default(0); 
            //Orellana
            $table->integer('orellana')->length(6)->default(0); 
            $table->integer('aguarico')->length(6)->default(0); 
            $table->integer('joya_sachas')->length(6)->default(0); 
            $table->integer('loreto')->length(6)->default(0); 
            //Pastaza
            $table->integer('pastaza')->length(6)->default(0); 
            $table->integer('arajuno')->length(6)->default(0); 
            $table->integer('mera')->length(6)->default(0); 
            $table->integer('santa_clara')->length(6)->default(0); 
            //Pichincha
            $table->integer('quito')->length(6)->default(0); 
            $table->integer('cayambe')->length(6)->default(0); 
            $table->integer('mejia')->length(6)->default(0); 
            $table->integer('pedro_moncayo')->length(6)->default(0); 
            $table->integer('pedro_vicente')->length(6)->default(0); 
            $table->integer('puerto_quito')->length(6)->default(0); 
            $table->integer('ruminahui')->length(6)->default(0); 
            $table->integer('bancos')->length(6)->default(0); 
            //Santa Elena
            $table->integer('santa_elena')->length(6)->default(0); 
            $table->integer('la_libertad')->length(6)->default(0); 
            $table->integer('salinas')->length(6)->default(0); 
            //Santo Domingo de los Tsachilas
            $table->integer('santo_domingo')->length(6)->default(0); 
            $table->integer('la_concordia')->length(6)->default(0);          
            //Sucumbios
            $table->integer('lago_agrio')->length(6)->default(0); 
            $table->integer('cascales')->length(6)->default(0); 
            $table->integer('cuyabeno')->length(6)->default(0); 
            $table->integer('gonzalo_pizarro')->length(6)->default(0); 
            $table->integer('putumayo')->length(6)->default(0); 
            $table->integer('shushufindi')->length(6)->default(0); 
            $table->integer('sucumbios')->length(6)->default(0);             
            //Tunguragua
            $table->integer('ambato')->length(6)->default(0); 
            $table->integer('banos')->length(6)->default(0); 
            $table->integer('cevallos')->length(6)->default(0); 
            $table->integer('mocha')->length(6)->default(0); 
            $table->integer('patate')->length(6)->default(0); 
            $table->integer('pelileo')->length(6)->default(0); 
            $table->integer('quero')->length(6)->default(0); 
            $table->integer('pillaro')->length(6)->default(0); 
            $table->integer('tisaleo')->length(6)->default(0);             
            //Zamora Chinchipe
            $table->integer('zamora')->length(6)->default(0); 
            $table->integer('centinela')->length(6)->default(0); 
            $table->integer('chinchipe')->length(6)->default(0); 
            $table->integer('el_pangui')->length(6)->default(0); 
            $table->integer('nangaritza')->length(6)->default(0); 
            $table->integer('palanda')->length(6)->default(0); 
            $table->integer('paquisha')->length(6)->default(0); 
            $table->integer('yacuambi')->length(6)->default(0); 
            $table->integer('yantzaza')->length(6)->default(0);   
            $table->timestamps();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casos');
    }
}
