<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aumentando extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_materia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('docente_id')->unsigned();
            $table->bigInteger('materia_id')->unsigned();
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('curso_docente', function (Blueprint $table) {
            $table->bigInteger('materia_id')->unsigned()->nullable();
            $table->foreign('materia_id')->references('id')->on('materias');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('docente_materia');
        Schema::table('curso_docente', function (Blueprint $table) {
            $table->dropColumn('materia_id');
        });

    }
}
