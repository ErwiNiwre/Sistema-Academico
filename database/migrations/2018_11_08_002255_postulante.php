<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Postulante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('postulantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ci')->unique()->nullable(); //identificación del ci
            $table->bigInteger('expedido')->unsigned();    //expedido
            $table->string('aPaterno')->nullable();
            $table->string('aMaterno')->nullable();
            $table->string('nombre')->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->enum('genero', ['M', 'F']);
            $table->enum('estadoCivil', ['S', 'C', 'V']);
            $table->string('correo')->unique()->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('carrera_id')->unsigned();
            $table->bigInteger('turno_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('turno_id')->references('id')->on('turnos');
            $table->foreign('expedido')->references('id')->on('departamentos');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('documento_ci')->nullable();
            $table->string('certificadoNacimiento')->nullable();
            $table->string('tituloBachiller')->nullable();
            $table->string('depositoBancario')->nullable();
            $table->bigInteger('postulante_id')->unsigned();
            $table->foreign('postulante_id')->references('id')->on('postulantes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('postulantes');
        Schema::drop('documentos');
    }
}
