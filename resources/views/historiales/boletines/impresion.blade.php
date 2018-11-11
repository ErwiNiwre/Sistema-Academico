@extends('impresion.impresion')

@section('content')

<table class="table-info w-100 m-b-5">
    <thead>
        <tr class="font-medium text-sm">
            <td class="px-15 py text-center bg-grey-darker text-white">
                NOMBRE:
            </td>
            <td class="text-sm text-center uppercase font-bold px-5 py-3" colspan="3">
                {{ $estudiantes->nombre." ".$estudiantes->aPaterno." ".$estudiantes->aMaterno }}
            </td>
            <td class="px-15 py text-center bg-grey-darker text-white">
                INSTITUCIÓN:
            </td>
            <td class="text-sm text-center uppercase font-bold px-5 py-3">
                "INCOS EL ALTO"
            </td>
        </tr>
        <tr class="font-medium text-sm">
            <td class="px-15 text-center bg-grey-darker text-white">
                CARRERA:
            </td>
            <td class="text-sm text-center uppercase font-bold px-5 py-3" colspan="3">
                    {{ $carre->carrera }}
            </td>
            <td class="px-15 py text-center bg-grey-darker text-white">
                NIVEL:
            </td>
            <td class="text-sm text-center uppercase font-bold px-5 py-3">
                    {{ $carre->nivelAcademico }}
            </td>
        </tr>
        <tr class="font-medium text-sm">
            <td class="px-15 py text-center bg-grey-darker text-white">
                CURSO:
            </td>
            <td class="text-sm text-center uppercase font-bold px-5 py-3">
                PRIMERO A
            </td>
            <td class="px-15 py text-center bg-grey-darker text-white">
                TURNO:
            </td>
            <td class="text-sm text-center uppercase font-bold px-5 py-3">
                NOCHE
            </td>
            <td class="px-15 py text-center bg-grey-darker text-white">
                GESTION:
            </td>
            <td class="text-sm text-center uppercase font-bold px-5 py-3">
                2018
            </td>
        </tr>
    </thead>
</table>
<br>

<div class="row">
    <div class="col">
        <div class="box box-default">
            {{--  <div class="box-header with-border">
                <h3 class="box-title">PRIMER AÑO</h3>
            </div>  --}}
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table-info w-100">
                        <thead class="font-medium text-white text-sm font-bold bg-grey-darker">
                            <tr>
                                <th class="text-center" rowspan="2">N°</th>
                                <th class="text-center" rowspan="2">Sigla</th>
                                <th class="text-center" rowspan="2">Materia</th>
                                <th class="text-center" colspan="4">PROMEDIOS</th>
                                <th class="text-center" rowspan="2">PROM.<br>ANUAL</th>
                                <th class="text-center" rowspan="2">2do. TURNO</th>
                                <th class="text-center" rowspan="2">OBSERVACIÓN</th>
                            </tr>
                            <tr>
                                <th class="text-center">1ER</th>
                                <th class="text-center">2DO</th>
                                <th class="text-center">3ER</th>
                                <th class="text-center">4TO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $i => $materia)
                                @if ($materia->nivel_id==1 and $materia->tipo== 'BIMESTRE')
                                    <tr role="row" class="odd">
                                        <td>{{ $j = $j+1}}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td> 
                                        <td>
                                            @foreach($bi_notas as $bi_nota)
                                                @foreach ($materias as $mate)
                                                    @foreach ($periodos as $periodo)
                                                        @if ($bi_nota->periodo_id == $periodo->id and $periodo->id == 4 and $bi_nota->materia_id ==$mate->id and $mate->id==$materia->id)
                                                        {{ $a=$bi_nota->puntaje_total }}
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                             @endforeach
                                        </td>
                                        <td>
                                            @foreach($bi_notas as $bi_nota)
                                                @foreach ($materias as $mate)
                                                    @foreach ($periodos as $periodo)
                                                        @if ($bi_nota->periodo_id == $periodo->id and $periodo->id == 5 and $bi_nota->materia_id ==$mate->id and $mate->id==$materia->id)
                                                        {{ $b=$bi_nota->puntaje_total }}
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                             @endforeach
                                        </td>
                                        <td>
                                            @foreach($bi_notas as $bi_nota)
                                                @foreach ($materias as $mate)
                                                    @foreach ($periodos as $periodo)
                                                        @if ($bi_nota->periodo_id == $periodo->id and $periodo->id == 6 and $bi_nota->materia_id ==$mate->id and $mate->id==$materia->id)
                                                        {{ $c=$bi_nota->puntaje_total }}
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                             @endforeach
                                        </td>
                                        <td>
                                            @foreach($bi_notas as $bi_nota)
                                                @foreach ($materias as $mate)
                                                    @foreach ($periodos as $periodo)
                                                        @if ($bi_nota->periodo_id == $periodo->id and $periodo->id == 7 and $bi_nota->materia_id ==$mate->id and $mate->id==$materia->id)
                                                        {{ $d=$bi_nota->puntaje_total }}
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                             @endforeach
                                        </td>
                                        <td>{{ $a+$b+$c+$d }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @else
                                     <?php $j = 0?>
                                @endif
                                <?php $a=0; $b=0; $c=0; $d=0?>
                             @endforeach
                            
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>

@endsection