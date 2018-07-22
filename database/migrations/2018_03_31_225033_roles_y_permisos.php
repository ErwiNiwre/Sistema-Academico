<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolesYPermisos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('operations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('module_id')->unsigned()->nullable();
            $table->string('name');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->timestamps();
        });
        Schema::create('acciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('permisos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('operation_id')->unsigned()->nullable();
            $table->bigInteger('accion_id')->unsigned()->nullable();
            $table->foreign('operation_id')->references('id')->on('operations');
            $table->foreign('accion_id')->references('id')->on('acciones');
            $table->timestamps();
        });
        Schema::create('rol_permisos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned()->nullable();
            $table->bigInteger('permiso_id')->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('permission_id')->references('id')->on('permisos');
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
        Schema::drop('rol_permisos');
        Schema::drop('permisos');
        Schema::drop('acciones');
        Schema::drop('operations');
    }
}
