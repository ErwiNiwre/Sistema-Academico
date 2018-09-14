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
            ['idCarrera' => '1', 'carrera' => 'CONTADURÍA GENERAL', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idCarrera' => '2', 'carrera' => 'SECRETARIADO EJECUTIVO', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idCarrera' => '3', 'carrera' => 'SISTEMAS INFORMÁTICOS', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idCarrera' => '4', 'carrera' => 'ADMINISTRACIÓN DE EMPRESAS', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idCarrera' => '5', 'carrera' => 'COMERCIO EXTERIOR', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idCarrera' => '6', 'carrera' => 'LINGÜÍSTICA', 'nivelAcademico' => 'TÉCNICO SUPERIOR', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
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
            ['idAula' => '1', 'aula' => 'Laboratorio 1', 'ubicacion' => 'Tercer Piso', 'capacidad' => '35', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '2', 'aula' => 'Laboratorio 2', 'ubicacion' => 'Tercer Piso', 'capacidad' => '30', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '3', 'aula' => 'Laboratorio 3', 'ubicacion' => 'Tercer Piso', 'capacidad' => '35', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '4', 'aula' => 'Laboratorio 4', 'ubicacion' => 'Tercer Piso', 'capacidad' => '25', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '5', 'aula' => 'Laboratorio 5', 'ubicacion' => 'Cuarto Piso', 'capacidad' => '35', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idAula' => '6', 'aula' => 'Laboratorio 6', 'ubicacion' => 'Cuarto Piso', 'capacidad' => '30', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
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

        DB::table('materias')->insert([
            //PRIMER AÑO TRIMESTRE
            ['idMateria' => '1', 'materia' => 'HARDWARE DE COMPUTADORAS', 'sigla' => 'HDC-101', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '2', 'materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'INA-102', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '3', 'materia' => 'IDIOMA ORIGINARIO', 'sigla' => 'IDO-103', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '4', 'materia' => 'INGLÉS TÉCNICO', 'sigla' => 'INT-104', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '5', 'materia' => 'PROGRAMACIÓN I', 'sigla' => 'PRG-105', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '6', 'materia' => 'TALLER DE PROGRAMACIÓN', 'sigla' => 'TDP-106', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '7', 'materia' => 'TALLER DE SISTEMAS OPERATIVOS', 'sigla' => 'TSO-107', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '8', 'materia' => 'HISTORIA DE SOCIEDADES DEL MUNDO', 'sigla' => 'HSM-108', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '9', 'materia' => 'MATEMÁTICAS PARA LAS COMPUTADORAS', 'sigla' => 'MPC-109', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //SEGUNDO AÑO TRIMESTRE
            ['idMateria' => '10', 'materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS I', 'sigla' => 'ADS-201', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '11', 'materia' => 'BASE DE DATOS I', 'sigla' => 'BDD-202', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '12', 'materia' => 'DISEÑO Y PROGRAMACIÓN WEB I', 'sigla' => 'DPW-203', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '13', 'materia' => 'ESTRUCTURA DE DATOS', 'sigla' => 'EDD-204', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '14', 'materia' => 'PROGRAMACIÓN II', 'sigla' => 'PRG-205', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '15', 'materia' => 'REDES DE COMPUTADORAS I', 'sigla' => 'RDC-206', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '16', 'materia' => 'TECNOLOGÍA GRÁFICA Y MULTIMEDIA', 'sigla' => 'TGM-207', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '17', 'materia' => 'DESARROLLO DE LAS SOCIEDADES', 'sigla' => 'DDS-208', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '18', 'materia' => 'ESTADÍSTICA APLICADA', 'sigla' => 'ETD-209', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //TERCER AÑO TRIMESTRE
            ['idMateria' => '19', 'materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS II', 'sigla' => 'ADS-301', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '20', 'materia' => 'BASE DE DATOS II', 'sigla' => 'BDD-302', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '21', 'materia' => 'DISEÑO Y PROGRAMACIÓN WEB II', 'sigla' => 'DPW-303', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '22', 'materia' => 'INGENIERÍA DE SOFTWARE', 'sigla' => 'IDS-304', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '23', 'materia' => 'PROGRAMACIÓN III', 'sigla' => 'PRG-305', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '24', 'materia' => 'REDES DE COMPUTADORAS II', 'sigla' => 'RDC-306', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '25', 'materia' => 'TALLER DE GRADO', 'sigla' => 'TDG-307', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '26', 'materia' => 'PENSAMIENTO CONTEMPORÁNEO Y COSMOVICIONES', 'sigla' => 'PCC-308', 'periodo' => 'TRIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //PRIMER AÑO BIMESTRE
            ['idMateria' => '27', 'materia' => 'MATEMÁTICAS PARA LA INFORMÁTICA', 'sigla' => 'MPI-101', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '28', 'materia' => 'PROGRAMACIÓN I', 'sigla' => 'PRG-102', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '29', 'materia' => 'INGLÉS TÉCNICO', 'sigla' => 'INT-103', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '30', 'materia' => 'HARDWARE DE COMPUTADORAS', 'sigla' => 'HDC-104', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '31', 'materia' => 'TALLER DE SISTEMAS OPERATIVOS', 'sigla' => 'TSO-105', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '32', 'materia' => 'INFORMÁTICA APLICADA', 'sigla' => 'INA-106', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '33', 'materia' => 'TECNOLOGÍA GRÁFICA Y MULTIMEDIA', 'sigla' => 'TGM-107', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            //SEGUNDO AÑO BIMESTRE
            ['idMateria' => '34', 'materia' => 'ESTADÍSTICA INFORMÁTICA', 'sigla' => 'ETD-201', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '35', 'materia' => 'PROGRAMACIÓN II', 'sigla' => 'PRG-202', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '36', 'materia' => 'ESTRUCTURA DE DATOS', 'sigla' => 'EDD-203', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '37', 'materia' => 'REDES DE COMPUTADORAS I', 'sigla' => 'RDC-204', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '38', 'materia' => 'PROGRAMACIÓN PARA DISPOSITIVOS', 'sigla' => 'PPD-205', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '39', 'materia' => 'ANÁLISIS Y DISEÑO DE SISTEMAS I', 'sigla' => 'ADS-206', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '40', 'materia' => 'DISEÑO Y PROGRAMACIÓN WEB I', 'sigla' => 'DPW-207', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
            ['idMateria' => '41', 'materia' => 'BASE DE DATOS I', 'sigla' => 'BDD-208', 'periodo' => 'BIMESTRE', 'created_at' => '2018/09/11', 'updated_at' => '2018/09/11'],
        ]);


    }
}
