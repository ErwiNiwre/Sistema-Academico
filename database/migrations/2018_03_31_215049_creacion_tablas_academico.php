<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionTablasAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rol');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('departamento');
            $table->string('abreviatura');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('carreras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carrera');
            $table->string('nivelAcademico');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('paralelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paralelo');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('turnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('turno');
            $table->timestamps();
            $table->softDeletes();
        });

        // $table->enum('tipo', ['A.M.', 'P.M.'])->default('A.M.');

            Schema::create('horas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('hora');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('niveles', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('numeral');
                $table->string('literal');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('aulas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('aula');
                $table->string('ubicacion');
                $table->bigInteger('capacidad');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('cursos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('aula_idAula')->unsigned();
                $table->bigInteger('paralelo_idParalelo')->unsigned();
                $table->bigInteger('nivel_idNivel')->unsigned();
                $table->bigInteger('turno_idTurno')->unsigned();
                $table->foreign('aula_idAula')->references('id')->on('aulas');
                $table->foreign('paralelo_idParalelo')->references('id')->on('paralelos');
                $table->foreign('nivel_idNivel')->references('id')->on('niveles');
                $table->foreign('turno_idTurno')->references('id')->on('turnos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('horarios', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('aula_idAula')->unsigned();
                $table->bigInteger('hora_idHora')->unsigned();
                $table->bigInteger('curso_idCurso')->unsigned();
                $table->boolean('estado')->default(false);
                $table->foreign('aula_idAula')->references('id')->on('aulas');
                $table->foreign('hora_idHora')->references('id')->on('horas');
                $table->foreign('curso_idCurso')->references('id')->on('cursos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('materias', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('materia');
                $table->string('sigla');
                $table->string('tipo');
                $table->bigInteger('carrera_idCarrera')->unsigned();
                $table->bigInteger('nivel_idNivel')->unsigned();
                $table->boolean('estado')->default(false);
                $table->foreign('carrera_idCarrera')->references('id')->on('carreras');
                $table->foreign('nivel_idNivel')->references('id')->on('niveles');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('materia_aula', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('materia_idMateria')->unsigned();
                $table->bigInteger('aula_idAula')->unsigned();
                $table->foreign('materia_idMateria')->references('id')->on('materias');
                $table->foreign('aula_idAula')->references('id')->on('aulas');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('usuarios', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('usuario')->unique();;
                $table->string('password');
                $table->bigInteger('rol_idRol')->unsigned();
                $table->foreign('rol_idRol')->references('id')->on('roles');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('docentes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('item')->unsigned()->nullable(); //
                $table->string('ci')->nullable(); //identificación del ci
                $table->bigInteger('expedido')->unsigned();    //expedido
                $table->string('aPaterno');
                $table->string('aMaterno');
                $table->string('nombre');
                $table->date('fechaNacimiento')->nullable();
                $table->enum('genero', ['M', 'F']);
                $table->string('correo')->unique();
                $table->string('direccion');
                $table->string('telefono')->nullable();
                $table->string('celular')->nullable();
                $table->bigInteger('usuario_idUsuario')->unsigned();
                $table->foreign('usuario_idUsuario')->references('id')->on('usuarios');
                $table->foreign('expedido')->references('id')->on('departamentos');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('docente_curso', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('docente_idDocente')->unsigned();
                $table->bigInteger('curso_idCurso')->unsigned();
                $table->foreign('docente_idDocente')->references('id')->on('docentes');
                $table->foreign('curso_idCurso')->references('id')->on('cursos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('docente_carrera', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('docente_idDocente')->unsigned();
                $table->bigInteger('carrera_idCarrera')->unsigned();
                $table->foreign('docente_idDocente')->references('id')->on('docentes');
                $table->foreign('carrera_idCarrera')->references('id')->on('carreras');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('administrativos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('item')->unsigned()->nullable(); //
                $table->string('ci')->nullable(); //identificación del ci
                $table->bigInteger('expedido')->unsigned();    //expedido
                $table->string('aPaterno');
                $table->string('aMaterno');
                $table->string('nombre');
                $table->date('fechaNacimiento')->nullable();
                $table->enum('genero', ['M', 'F']);
                $table->string('correo')->unique();
                $table->string('direccion');
                $table->string('telefono')->nullable();
                $table->string('celular')->nullable();
                $table->bigInteger('usuario_idUsuario')->unsigned();
                $table->bigInteger('carrera_idCarrera')->unsigned();
                $table->foreign('usuario_idUsuario')->references('id')->on('usuarios');
                $table->foreign('carrera_idCarrera')->references('id')->on('carreras');
                $table->foreign('expedido')->references('id')->on('departamentos');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('estudiantes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('matricula')->unsigned()->nullable(); //
                $table->string('ci')->nullable(); //identificación del ci
                $table->bigInteger('expedido')->unsigned();    //expedido
                $table->string('aPaterno');
                $table->string('aMaterno');
                $table->string('nombre');
                $table->date('fechaNacimiento')->nullable();
                $table->enum('genero', ['M', 'F']);
                $table->string('correo')->unique();
                $table->string('direccion');
                $table->string('telefono')->nullable();
                $table->string('celular')->nullable();
                $table->enum('pensum', ['ANTIGUO', 'NUEVO'])->default('NUEVO');
                $table->bigInteger('usuario_idUsuario')->unsigned();
                $table->foreign('usuario_idUsuario')->references('id')->on('usuarios');
                $table->foreign('expedido')->references('id')->on('departamentos');
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('estudiante_carrera', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('estudiante_idEstudiante')->unsigned();
                $table->bigInteger('carrera_idCarrera')->unsigned();
                $table->foreign('estudiante_idEstudiante')->references('id')->on('estudiantes');
                $table->foreign('carrera_idCarrera')->references('id')->on('carreras');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('periodos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('numeral');
                $table->string('literal');
                $table->string('periodo');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('curso_estudiante', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('curso_idCurso')->unsigned();
                $table->bigInteger('estudiante_idEstudiante')->unsigned();
                $table->date('fecha_ins');
                $table->boolean('estado')->default(false);
                $table->foreign('curso_idCurso')->references('id')->on('cursos');
                $table->foreign('estudiante_idEstudiante')->references('id')->on('estudiantes');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('administrativo_turno', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('administrativo_idAdministrativo')->unsigned();
                $table->bigInteger('turno_idTurno')->unsigned();
                $table->foreign('administrativo_idAdministrativo')->references('id')->on('administrativos');
                $table->foreign('turno_idTurno')->references('id')->on('turnos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('docente_turno', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('docente_idDocente')->unsigned();
                $table->bigInteger('turno_idTurno')->unsigned();
                $table->foreign('docente_idDocente')->references('id')->on('docentes');
                $table->foreign('turno_idTurno')->references('id')->on('turnos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('tri_notas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->decimal('asistencia', 3, 2)->nullable();
                $table->decimal('control_lectura', 3, 2)->nullable();
                $table->decimal('investigacion_productiva', 3, 2)->nullable();
                $table->decimal('participacion_constructiva', 3, 2)->nullable();
                $table->decimal('taller_laboratorios', 3, 2)->nullable();
                $table->decimal('evaluacion', 3, 2)->nullable();
                $table->decimal('puntaje_total', 3, 2)->nullable();
                $table->decimal('segundo_turno', 3, 2)->nullable();
                $table->string('observacion');
                $table->bigInteger('estudiante_idEstudiante')->unsigned();
                $table->bigInteger('materia_idMateria')->unsigned();
                $table->bigInteger('periodo_idPeriodo')->unsigned();
                $table->foreign('estudiante_idEstudiante')->references('id')->on('estudiantes');
                $table->foreign('materia_idMateria')->references('id')->on('materias');
                $table->foreign('periodo_idPeriodo')->references('id')->on('periodos');
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('bi_notas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->decimal('asistencia', 3, 2)->nullable();
                $table->decimal('investigacion_productiva', 3, 2)->nullable();
                $table->decimal('participacion_constructiva', 3, 2)->nullable();
                $table->decimal('taller_laboratorios', 3, 2)->nullable();
                $table->decimal('evaluacion', 3, 2)->nullable();
                $table->decimal('puntaje_total', 3, 2)->nullable();
                $table->decimal('segundo_turno', 3, 2)->nullable();
                $table->string('observacion');
                $table->bigInteger('estudiante_idEstudiante')->unsigned();
                $table->bigInteger('materia_idMateria')->unsigned();
                $table->bigInteger('periodo_idPeriodo')->unsigned();
                $table->foreign('estudiante_idEstudiante')->references('id')->on('estudiantes');
                $table->foreign('materia_idMateria')->references('id')->on('materias');
                $table->foreign('periodo_idPeriodo')->references('id')->on('periodos');
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

            Schema::drop('roles');
            Schema::drop('carreras');
            Schema::drop('paralelos');
            Schema::drop('turnos');
            Schema::drop('horas');
            Schema::drop('niveles');
            Schema::drop('aulas');
            Schema::drop('cursos');
            Schema::drop('horarios');
            Schema::drop('materias');
            Schema::drop('materia_aula');
            Schema::drop('usuarios');
            Schema::drop('docentes');
            Schema::drop('docente_curso');
            Schema::drop('docente_carrera');
            Schema::drop('administrativos');
            Schema::drop('estudiantes');
            Schema::drop('periodos');
            Schema::drop('curso_estudiante');
            Schema::drop('administrativo_turno');
            Schema::drop('docente_turno');
            Schema::drop('tri_notas');
            Schema::drop('bi_notas');
        }


    }
