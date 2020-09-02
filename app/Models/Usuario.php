<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Usuario;
use Auth;
use Carbon\Carbon;

class Usuario extends Authenticatable {    
    use SoftDeletes;

    protected $table = 'usuarios';
    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombres',
        'apellidos',
        'username',
        'email',
        'password',
        'password_hash',
        'password_salt',
        'cedula',
        'foto',
        'telefono',
        'celular',        
        'fecha_nacimiento',       
    ];

    

}


