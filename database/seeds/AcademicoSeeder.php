<?php

use Illuminate\Database\Seeder;

class AcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            ['idRol' => '1', 'rol' => 'ADMINISTRADOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idRol' => '2', 'rol' => 'RECTOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idRol' => '3', 'rol' => 'DIRECTOR ACADEMICO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idRol' => '4', 'rol' => 'SECRETARIA', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idRol' => '5', 'rol' => 'DOCENTE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idRol' => '6', 'rol' => 'ESTUDIANTE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idRol' => '7', 'rol' => 'POSTULANTES', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('carreras')->insert([
            ['idCarrera' => '1', 'nombre' => 'SISTEMAS INFORMATICOS', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idCarrera' => '2', 'nombre' => 'SECRETARIADO EJECUTIVO', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('paralelos')->insert([
            ['idParalelo' => '1', 'paralelo' => 'A', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idParalelo' => '2', 'paralelo' => 'B', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idParalelo' => '3', 'paralelo' => 'C', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idParalelo' => '4', 'paralelo' => 'D', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idParalelo' => '5', 'paralelo' => 'E', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idParalelo' => '6', 'paralelo' => 'F', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('turnos')->insert([
            ['idTurno' => '1', 'turno' => 'MAÑANA', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idTurno' => '2', 'turno' => 'NOCHE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('horas')->insert([
            ['idHora' => '1', 'hora' => '08:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '2', 'hora' => '09:30', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '3', 'hora' => '11:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '4', 'hora' => '11:15', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '5', 'hora' => '12:45', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '6', 'hora' => '19:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '7', 'hora' => '20:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '8', 'hora' => '21:00', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '9', 'hora' => '21:15', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idHora' => '10', 'hora' => '10:15', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('niveles')->insert([
            ['idNivel' => '1', 'numeral' => '1ro', 'literal' => 'PRIMERO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idNivel' => '2', 'numeral' => '2do', 'literal' => 'SEGUNDO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idNivel' => '3', 'numeral' => '3ro', 'literal' => 'TERCERO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idNivel' => '4', 'numeral' => '4to', 'literal' => 'CUARTO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idNivel' => '5', 'numeral' => '5to', 'literal' => 'QUINTO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idNivel' => '6', 'numeral' => '6to', 'literal' => 'SEXTO', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('aulas')->insert([
            ['idAula' => '1', 'nombre' => 'Laboratorio 1', 'ubicacion' => 'Tercer Piso', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '2', 'nombre' => 'Laboratorio 2', 'ubicacion' => 'Tercer Piso', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '3', 'nombre' => 'Laboratorio 3', 'ubicacion' => 'Tercer Piso', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '4', 'nombre' => 'Laboratorio 4', 'ubicacion' => 'Tercer Piso', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '5', 'nombre' => 'Laboratorio 5', 'ubicacion' => 'Cuarto Piso', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '6', 'nombre' => 'Laboratorio 6', 'ubicacion' => 'Cuarto Piso', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

        DB::table('periodos')->insert([
            ['idPeriodo' => '1', 'numeral' => '1er', 'literal' => 'PRIMER', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idPeriodo' => '2', 'numeral' => '2do', 'literal' => 'SEGUNDO', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idPeriodo' => '3', 'numeral' => '3er', 'literal' => 'TERCER', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idPeriodo' => '4', 'numeral' => '1er', 'literal' => 'PRIMER', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idPeriodo' => '5', 'numeral' => '2do', 'literal' => 'SEGUNDO', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idPeriodo' => '6', 'numeral' => '3er', 'literal' => 'TERCER', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idPeriodo' => '7', 'numeral' => '4to', 'literal' => 'CUARTO', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);

    }
}
