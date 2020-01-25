<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_permisorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id','fk_permisorol_permiso')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
       
            $table->timestamps();
        });
    }
    /* unsignedInteger es mi columna 
    en foreign se le indica que columna, el nombre fk, references y on en la relacion con la tabla y lo demas son acciones */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_rol');
    }
}
