<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::defaultStringLength(191);
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('username')->nullable()->unique(); 
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('password_hash')->nullable();
            $table->string('password_salt')->nullable();
            $table->string('cedula',20)->nullable();
            $table->string('foto')->nullable();
            $table->string('telefono',25)->nullable();
            $table->string('celular',25)->nullable();
            $table->date('fecha_nacimiento')->nullable();                                      
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('usuarios');
    }
}
