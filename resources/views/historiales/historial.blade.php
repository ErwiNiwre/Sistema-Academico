@extends('layouts.incos_inicio')

@section('content')
<center>
    <h1>HISTORIAL ACADEMICO</h1>
</center>
<div class="row">
    <div class="col">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">PRIMER AÑO</h3>
                <button type="submit" class="btn btn-primary pull-right" href="{{ route('estudiantes.boletin', 1) }}" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generar PDF
                </button>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-green-active">
                            <tr>
                                <th class="text-center">N°</th>
                                <th class="text-center">Sigla</th>
                                <th class="text-center">Materia</th>
                                <th class="text-center">TIPO</th>
                                <th class="text-center">1ER</th>
                                <th class="text-center">2DO</th>
                                <th class="text-center">3ER</th>
                                <th class="text-center">4TO</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $i => $materia)
                                @if ($materia->nivel_id==1 and $materia->tipo== 'BIMESTRE')
                                    <tr role="row" class="odd">
                                        <td>{{ $j = $j+1}}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td>
                                        <td>{{ $materia->tipo }}</td> 
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
                                    </tr>
                                @else
                                     <?php $j = 0?>
                                @endif
                                <?php $a=0; $b=0; $c=0; $d=0?>
                             @endforeach
                            {{--  {{ $bi_notas }}  --}}
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
    <div class="col">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">SEGUNDO AÑO</h3>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-green-active">
                            <tr>
                                <th class="text-center">N°</th>
                                <th class="text-center">Sigla</th>
                                <th class="text-center">Materia</th>
                                <th class="text-center">TIPO</th>
                                <th class="text-center">1ER</th>
                                <th class="text-center">2DO</th>
                                <th class="text-center">3ER</th>
                                <th class="text-center">4TO</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $i => $materia)
                                @if ($materia->nivel_id==2 and $materia->tipo== 'BIMESTRE')
                                    <tr role="row" class="odd">
                                        <td>{{ $j = $j+1}}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td>
                                        <td>{{ $materia->tipo }}</td> 
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
                                    </tr>
                                @else
                                     <?php $j = 0?>
                                @endif
                                <?php $a=0; $b=0; $c=0; $d=0?>
                             @endforeach
                            {{--  {{ $bi_notas }}  --}}
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
    <div class="col">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">TERCER AÑO</h3>
            </div>
            <div class="box-body">
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-green-active">
                            <tr>
                                <th class="text-center">N°</th>
                                <th class="text-center">Sigla</th>
                                <th class="text-center">Materia</th>
                                <th class="text-center">TIPO</th>
                                <th class="text-center">1ER</th>
                                <th class="text-center">2DO</th>
                                <th class="text-center">3ER</th>
                                <th class="text-center">4TO</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($materias as $i => $materia)
                                @if ($materia->nivel_id==3 and $materia->tipo== 'TRIMESTRE')
                                    <tr role="row" class="odd">
                                        <td>{{ $j = $j+1}}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td>
                                        <td>{{ $materia->tipo }}</td> 
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
                                    </tr>
                                @else
                                     <?php $j = 0?>
                                @endif
                                <?php $a=0; $b=0; $c=0; $d=0?>
                             @endforeach
                            {{--  {{ $bi_notas }}  --}}
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</div>

@endsection