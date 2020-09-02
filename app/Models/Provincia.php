<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Usuario;
use Auth;
use Carbon\Carbon;

class Provincia extends Authenticatable {    
    // use SoftDeletes;

    protected $table = 'provincias';
    public $timestamps = false;

    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
    // protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre',        
    ];

    

}


