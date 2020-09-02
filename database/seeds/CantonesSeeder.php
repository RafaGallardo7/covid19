<?php

use Illuminate\Database\Seeder;
use App\Models\Canton;

class CantonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la Tabla
        // Canton::truncate();	  
        
        $cantones = [
            [	    	
	    		'id' => '1', 
				'nombre' => 'Cuenca',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
	    	],
            [	    	
	    		'id' => '2', 
	    		'nombre' => 'Camilo Ponce Enríquez',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
	    	],
	    	[
	    		'id' => '3', 
	    		'nombre' => 'Chordeleg',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
	    	],
	    	[
	    		'id' => '4', 
	    		'nombre' => 'El Pan',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],	    	
	    	[
	    		'id' => '5', 
	    		'nombre' => 'Girón',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],	    	
	    	[
	    		'id' => '6', 
	    		'nombre' => 'Guachapala',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],
            [
	    		'id' => '7', 
	    		'nombre' => 'Gualaceo',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],
            [
	    		'id' => '8', 
	    		'nombre' => 'Nabón',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],
            [	    	
	    		'id' => '9', 
	    		'nombre' => 'Oña',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
	    	],
	    	[
	    		'id' => '10', 
	    		'nombre' => 'Paute',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
	    	],
	    	[
	    		'id' => '11', 
	    		'nombre' => 'Pucará',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],	    	
	    	[
	    		'id' => '12', 
	    		'nombre' => 'San Fernando',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],	    	
	    	[
	    		'id' => '13', 
	    		'nombre' => 'Santa Isabel',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],
            [
	    		'id' => '14', 
	    		'nombre' => 'Sevilla de Oro',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
            ],
            [
	    		'id' => '15', 
	    		'nombre' => 'Sígsig',
				'id_provincia' => 1,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '16', 
	    		'nombre' => 'Guaranda',
				'id_provincia' => 2,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '17', 
	    		'nombre' => 'Caluma',
				'id_provincia' => 2,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '18', 
	    		'nombre' => 'Chillanes',
				'id_provincia' => 2,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '19', 
	    		'nombre' => 'Chimbo',
				'id_provincia' => 2,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '20', 
	    		'nombre' => 'Echeandía',
				'id_provincia' => 2,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '21', 
	    		'nombre' => ' Las Naves',
				'id_provincia' => 2,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '22', 
	    		'nombre' => 'San Miguel',
				'id_provincia' => 2,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '23', 
	    		'nombre' => 'Azogues',
				'id_provincia' => 3,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '24', 
	    		'nombre' => 'Biblián',
				'id_provincia' => 3,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '25', 
	    		'nombre' => 'Cañar',
				'id_provincia' => 3,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '26', 
	    		'nombre' => 'Déleg',
				'id_provincia' => 3,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '27', 
	    		'nombre' => 'El Tambo',
				'id_provincia' => 3,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '28', 
	    		'nombre' => ' La Troncal',
				'id_provincia' => 3,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '29', 
	    		'nombre' => 'Suscal',
				'id_provincia' => 3,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '30', 
	    		'nombre' => 'Tulcán',
				'id_provincia' => 4,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '31', 
	    		'nombre' => 'Bolívar',
				'id_provincia' => 4,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '32', 
	    		'nombre' => 'Espejo',
				'id_provincia' => 4,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '33', 
	    		'nombre' => 'Mira',
				'id_provincia' => 4,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '34', 
	    		'nombre' => 'Montúfar',
				'id_provincia' => 4,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '35', 
	    		'nombre' => 'San Pedro de Huaca',
				'id_provincia' => 4,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '36', 
	    		'nombre' => 'Riobamba',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '37', 
	    		'nombre' => 'Alausí',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '38', 
	    		'nombre' => 'Chambo',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '39', 
	    		'nombre' => 'Chunchi',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '40', 
	    		'nombre' => 'Colta',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '41', 
	    		'nombre' => 'Cumandá',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '42', 
	    		'nombre' => 'Guamote',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '43', 
	    		'nombre' => 'Guano',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '44', 
	    		'nombre' => 'Pallatanga',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '45', 
	    		'nombre' => 'Penipe',
				'id_provincia' => 5,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '46', 
	    		'nombre' => 'Latacunga',
				'id_provincia' => 6,
				'poblacion_2020' => 0	    		
			],
            [
	    		'id' => '47', 
	    		'nombre' => 'La Maná',
				'id_provincia' => 6,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '48', 
	    		'nombre' => 'Pangua',
				'id_provincia' => 6,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '49', 
	    		'nombre' => 'Pujilí',
				'id_provincia' => 6,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '50', 
	    		'nombre' => 'Salcedo',
				'id_provincia' => 6,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '51', 
	    		'nombre' => 'Saquisilí',
				'id_provincia' => 6,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '52', 
	    		'nombre' => 'Sigchos',
				'id_provincia' => 6,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '53', 
	    		'nombre' => 'Machala',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '54', 
	    		'nombre' => 'Arenillas',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '55', 
	    		'nombre' => 'Atahualpa',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '56', 
	    		'nombre' => 'Balsas',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '57', 
	    		'nombre' => 'Chilla',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '58', 
	    		'nombre' => 'El Guabo',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '59', 
	    		'nombre' => 'Huaquillas',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '60', 
	    		'nombre' => 'Las Lajas',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '61', 
	    		'nombre' => 'Marcabelí',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '62', 
	    		'nombre' => 'Pasaje',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '63', 
	    		'nombre' => 'Piñas',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '64', 
	    		'nombre' => 'Portovelo',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '65', 
	    		'nombre' => 'Santa Rosa',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '66', 
	    		'nombre' => 'Zaruma',
				'id_provincia' => 7,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '67', 
	    		'nombre' => 'Esmeraldas',
				'id_provincia' => 8,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '68', 
	    		'nombre' => 'Atacames',
				'id_provincia' => 8,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '69', 
	    		'nombre' => 'Eloy Alfaro',
				'id_provincia' => 8,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '70', 
	    		'nombre' => 'Muisne',
				'id_provincia' => 8,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '71', 
	    		'nombre' => 'Quinindé',
				'id_provincia' => 8,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '72', 
	    		'nombre' => 'Rioverde',
				'id_provincia' => 8,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '73', 
	    		'nombre' => 'San Lorenzo',
				'id_provincia' => 8,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '74', 
	    		'nombre' => 'San Cristóbal',
				'id_provincia' => 9,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '75', 
	    		'nombre' => 'Isabela',
				'id_provincia' => 9,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '76', 
	    		'nombre' => 'Santa Cruz',
				'id_provincia' => 9,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '77', 
	    		'nombre' => 'Guayaquil',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '78', 
	    		'nombre' => 'Alfredo Baquerizo Moreno',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '79', 
	    		'nombre' => 'Balao',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '80', 
	    		'nombre' => 'Balzar',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '81', 
	    		'nombre' => 'Colimes',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '82', 
	    		'nombre' => 'Daule',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '83', 
	    		'nombre' => 'Durán',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '84', 
	    		'nombre' => 'El Empalme',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '85', 
	    		'nombre' => 'El Triunfo',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '86', 
	    		'nombre' => 'General Antonio Elizalde',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '87', 
	    		'nombre' => 'Isidro Ayora',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '88', 
	    		'nombre' => 'Lomas de Sargentillo',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '89', 
	    		'nombre' => 'Marcelino Maridueña',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '90', 
	    		'nombre' => 'Milagro',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '91', 
	    		'nombre' => 'Naranjal',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '92', 
	    		'nombre' => 'Naranjito',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '93', 
	    		'nombre' => 'Nobol',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '94', 
	    		'nombre' => 'Palestina',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '95', 
	    		'nombre' => 'Pedro Carbo',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '96', 
	    		'nombre' => 'Playas',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '97', 
	    		'nombre' => 'Salitre',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '98', 
	    		'nombre' => 'Samborondón',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '99', 
	    		'nombre' => 'Santa Lucía',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '100', 
	    		'nombre' => 'Simón Bolívar',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '101', 
	    		'nombre' => 'Yaguachi',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '102', 
	    		'nombre' => 'Ibarra',
				'id_provincia' => 11,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '103', 
	    		'nombre' => 'Antonio Ante',
				'id_provincia' => 11,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '104', 
	    		'nombre' => 'Cotacachi',
				'id_provincia' => 11,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '105', 
	    		'nombre' => 'Otavalo',
				'id_provincia' => 11,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '106', 
	    		'nombre' => 'Pimampiro',
				'id_provincia' => 11,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '107', 
	    		'nombre' => 'San Miguel de Urcuquí',
				'id_provincia' => 11,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '108', 
	    		'nombre' => 'Loja',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '109', 
	    		'nombre' => 'Calvas',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '110', 
	    		'nombre' => 'Catamayo',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '111', 
	    		'nombre' => 'Celica',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '112', 
	    		'nombre' => 'Chaguarpamba',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '113', 
	    		'nombre' => 'Espíndola',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '114', 
	    		'nombre' => 'Gonzanamá',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '115', 
	    		'nombre' => 'Macará',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '116', 
	    		'nombre' => 'Olmedo',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '117', 
	    		'nombre' => 'Paltas',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '118', 
	    		'nombre' => 'Pindal',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '119', 
	    		'nombre' => 'Puyango',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '120', 
	    		'nombre' => 'Quilanga',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '121', 
	    		'nombre' => 'Saraguro',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '122', 
	    		'nombre' => 'Sozoranga',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '123', 
	    		'nombre' => 'Zapotillo',
				'id_provincia' => 12,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '124', 
	    		'nombre' => 'Babahoyo',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '125', 
	    		'nombre' => 'Baba',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '126', 
	    		'nombre' => 'Buena Fe',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '127', 
	    		'nombre' => 'Mocache',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '128', 
	    		'nombre' => 'Montalvo',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '129', 
	    		'nombre' => 'Palenque',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '130', 
	    		'nombre' => 'Puebloviejo',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '131', 
	    		'nombre' => 'Quevedo',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '132', 
	    		'nombre' => 'Quinsaloma',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '133', 
	    		'nombre' => 'Urdaneta',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '134', 
	    		'nombre' => 'Valencia',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '135', 
	    		'nombre' => 'Ventanas',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '136', 
	    		'nombre' => 'Vinces',
				'id_provincia' => 13,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '137', 
	    		'nombre' => 'Portoviejo',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '138', 
	    		'nombre' => '24 de Mayo',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '139', 
	    		'nombre' => 'Bolívar',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '140', 
	    		'nombre' => 'Chone',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '141', 
	    		'nombre' => 'El Carmen',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '142', 
	    		'nombre' => 'Flavio Alfaro',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '143', 
	    		'nombre' => 'Jama',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '144', 
	    		'nombre' => 'Jaramijó',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '145', 
	    		'nombre' => 'Jipijapa',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '146', 
	    		'nombre' => 'Junín',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '147', 
	    		'nombre' => 'Manta',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '148', 
	    		'nombre' => 'Montecristi',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '149', 
	    		'nombre' => 'Olmedo',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '150', 
	    		'nombre' => 'Paján',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '151', 
	    		'nombre' => 'Pedernales',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '152', 
	    		'nombre' => 'Pichincha',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '153', 
	    		'nombre' => 'Puerto López',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '154', 
	    		'nombre' => 'Rocafuerte',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '155', 
	    		'nombre' => 'San Vicente',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '156', 
	    		'nombre' => 'Santa Ana',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '157', 
	    		'nombre' => 'Sucre',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '158', 
	    		'nombre' => 'Tosagua',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '159', 
	    		'nombre' => 'Morona',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '160', 
	    		'nombre' => 'Gualaquiza',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '161', 
	    		'nombre' => 'Huamboya',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '162', 
	    		'nombre' => 'Limón Indanza',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '163', 
	    		'nombre' => 'Logroño',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '164', 
	    		'nombre' => 'Pablo Sexto',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '165', 
	    		'nombre' => 'Palora',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '166', 
	    		'nombre' => 'San Juan Bosco',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '167', 
	    		'nombre' => 'Santiago de Méndez',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '168', 
	    		'nombre' => 'Sucúa',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '169', 
	    		'nombre' => 'Taisha',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '170', 
	    		'nombre' => 'Tiwintza',
				'id_provincia' => 15,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '171', 
	    		'nombre' => 'Tena',
				'id_provincia' => 16,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '172', 
	    		'nombre' => 'Archidona',
				'id_provincia' => 16,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '173', 
	    		'nombre' => 'Carlos Julio Arosemena Tola',
				'id_provincia' => 16,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '174', 
	    		'nombre' => 'El Chaco',
				'id_provincia' => 16,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '175', 
	    		'nombre' => 'Quijos',
				'id_provincia' => 16,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '176', 
	    		'nombre' => 'Francisco de Orellana',
				'id_provincia' => 17,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '177', 
	    		'nombre' => 'Aguarico',
				'id_provincia' => 17,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '178', 
	    		'nombre' => 'La Joya de los Sachas',
				'id_provincia' => 17,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '179', 
	    		'nombre' => 'Loreto',
				'id_provincia' => 17,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '180', 
	    		'nombre' => 'Pastaza',
				'id_provincia' => 18,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '181', 
	    		'nombre' => 'Arajuno',
				'id_provincia' => 18,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '182', 
	    		'nombre' => 'Mera',
				'id_provincia' => 18,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '183', 
	    		'nombre' => 'Santa Clara',
				'id_provincia' => 18,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '184', 
	    		'nombre' => 'Quito',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '185', 
	    		'nombre' => 'Cayambe',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '186', 
	    		'nombre' => 'Mejía',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '187', 
	    		'nombre' => 'Pedro Moncayo',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '188', 
	    		'nombre' => 'Pedro Vicente Maldonado',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '189', 
	    		'nombre' => 'Puerto Quito',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '190', 
	    		'nombre' => 'Rumiñahui',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '191', 
	    		'nombre' => 'San Miguel de los Bancos',
				'id_provincia' => 19,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '192', 
	    		'nombre' => 'Santa Elena',
				'id_provincia' => 20,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '193', 
	    		'nombre' => 'La Libertad',
				'id_provincia' => 20,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '194', 
	    		'nombre' => 'Salinas',
				'id_provincia' => 20,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '195', 
	    		'nombre' => 'Santo Domingo',
				'id_provincia' => 21,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '196', 
	    		'nombre' => 'La Concordia',
				'id_provincia' => 21,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '197', 
	    		'nombre' => 'Lago Agrio',
				'id_provincia' => 22,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '198', 
	    		'nombre' => 'Cascales',
				'id_provincia' => 22,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '199', 
	    		'nombre' => 'Cuyabeno',
				'id_provincia' => 22,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '200', 
	    		'nombre' => 'Gonzalo Pizarro',
				'id_provincia' => 22,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '201', 
	    		'nombre' => 'Putumayo',
				'id_provincia' => 22,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '202', 
	    		'nombre' => 'Shushufindi',
				'id_provincia' => 22,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '203', 
	    		'nombre' => 'Sucumbíos',
				'id_provincia' => 22,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '204', 
	    		'nombre' => 'Ambato',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '205', 
	    		'nombre' => 'Baños',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '206', 
	    		'nombre' => 'Cevallos',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '207', 
	    		'nombre' => 'Mocha',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '208', 
	    		'nombre' => 'Patate',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '209', 
	    		'nombre' => 'Pelileo',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '210', 
	    		'nombre' => 'Quero',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '211', 
	    		'nombre' => 'Santiago de Píllaro',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '212', 
	    		'nombre' => 'Tisaleo',
				'id_provincia' => 23,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '213', 
	    		'nombre' => 'Zamora',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '214', 
	    		'nombre' => 'Centinela del Cóndor',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '215', 
	    		'nombre' => 'Chinchipe',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '216', 
	    		'nombre' => 'El Pangui',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '217', 
	    		'nombre' => 'Nangaritza',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '218', 
	    		'nombre' => 'Palanda',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '219', 
	    		'nombre' => 'Paquisha',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '220', 
	    		'nombre' => 'Yacuambi',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '221', 
	    		'nombre' => 'Yantzaza',
				'id_provincia' => 24,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '222', 
	    		'nombre' => 'El Piedrero',
				'id_provincia' => 10,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '223', 
	    		'nombre' => 'Las Golondrinas',
				'id_provincia' => 11,
				'poblacion_2020' => 0	    		
			],
			[
	    		'id' => '224', 
	    		'nombre' => 'Manga del Cura',
				'id_provincia' => 14,
				'poblacion_2020' => 0	    		
			]
									
	    ];

	    foreach($cantones as $canton){
		    Canton::create($canton);
		}
    }
}
