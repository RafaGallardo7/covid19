<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
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
        
        $usuarios = [
            [	    	
	    		'id' => '1', 
	    		'nombres' => 'Rafael',
                'apellidos' => 'Gallardo',
                'username' => 'rafagallardo',
                'email' => 'rafagallardo7@hotmail.com',
                'password' => '123456',
                'password_hash' => '2295d090ca175e9761fdb8ddff6eb02dd65dcad420c561508c6371365dc4138c',
                'password_salt' => '2fikHUVUCp7JfBIAz8O8xIZBAIAK1BqzbdFw8FXLMtYh7m3m6EJceSAu7NcwOzxb',
                'cedula' => '0000000000',
                'foto' => '',
                'telefono' => '099376xxxx',
                'celular' => '099376xxxx',        
                'fecha_nacimiento' => '1990-01-01', 	    		
	    	]
            
	    ];

	    foreach($usuarios as $usuario){
		    Usuario::create($usuario);
		}
    }
}
