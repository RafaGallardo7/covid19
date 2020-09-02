<?php

use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la Tabla
        // Ciudad::truncate();	  
        
        $provincias = [
            [	    	
	    		'id' => '1', 
	    		'nombre' => 'Azuay'	    		
	    	],
            [	    	
	    		'id' => '2', 
	    		'nombre' => 'Bolívar'	    		
	    	],
	    	[
	    		'id' => '3', 
	    		'nombre' => 'Cañar'	    		
	    	],
	    	[
	    		'id' => '4', 
	    		'nombre' => 'Carchi'	    		
            ],	    	
	    	[
	    		'id' => '5', 
	    		'nombre' => 'Chimborazo'	    		
            ],	    	
	    	[
	    		'id' => '6', 
	    		'nombre' => 'Cotopaxi'	    		
            ],
            [
	    		'id' => '7', 
	    		'nombre' => 'El Oro'	    		
            ],
            [
	    		'id' => '8', 
	    		'nombre' => 'Esmeraldas'	    		
            ],
            [	    	
	    		'id' => '9', 
	    		'nombre' => 'Galápagos'	    		
	    	],
	    	[
	    		'id' => '10', 
	    		'nombre' => 'Guayas'	    		
	    	],
	    	[
	    		'id' => '11', 
	    		'nombre' => 'Imbabura'	    		
            ],	    	
	    	[
	    		'id' => '12', 
	    		'nombre' => 'Loja'	    		
            ],	    	
	    	[
	    		'id' => '13', 
	    		'nombre' => 'Los Ríos'	    		
            ],
            [
	    		'id' => '14', 
	    		'nombre' => 'Manabí'	    		
            ],
            [
	    		'id' => '15', 
	    		'nombre' => 'Morona Santiago'	    		
            ],
            [
	    		'id' => '16', 
	    		'nombre' => 'Napo'	    		
            ],
            [	    	
	    		'id' => '17', 
	    		'nombre' => 'Orellana'	    		
	    	],
	    	[
	    		'id' => '18', 
	    		'nombre' => 'Pastaza'	    		
	    	],
	    	[
	    		'id' => '19', 
	    		'nombre' => 'Pichincha'	    		
            ],	    
            [
	    		'id' => '20', 
	    		'nombre' => 'Santa Elena'	    		
            ],	    		    
            [
	    		'id' => '21', 
	    		'nombre' => 'Santo Domingo de los Tsáchilas'	    		
			],
			[
	    		'id' => '22', 
	    		'nombre' => 'Sucumbíos'	    		
			],	    
			[
	    		'id' => '23', 
	    		'nombre' => 'Tungurahua'	    		
			],	    
			[
	    		'id' => '24', 
	    		'nombre' => 'Zamora Chinchipe'	    		
            ]
	    ];

	    foreach($provincias as $provincia){
		    Provincia::create($provincia);
		}
    }
}
