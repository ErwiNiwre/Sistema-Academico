@extends('layouts.incos_inicio')

@section('titulo')
    Lista Docente - Carrera
@endsection
@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Carreras con Materias Designadas</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group" id="example1_length">
                        <label>Docente: Jua
                        </label><br>
                    {{-- {{ Form::select('carrera', $carrera, null, ['class' => 'form-control select2','placeholder' => 'Select a client...']) }} --}}
                        <label>Carreras: 
                            {{-- {{ $docentes }} --}}
                            {{-- <form method="post" action="{{ route('docentes.carreras') }}" name="carre"> --}}
                            <select  class="form-control" name="carrera">
                              @foreach ($carreras as $carrera)
                              @if ($carrera->id==3)
                                <option value="{{ $carrera->id }}" selected>{{ $carrera->carrera }}</option>  
                              @else
                                <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
                              @endif
                                    
                              @endforeach
                            </select> 
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered table-hover display" id="datatables-affiliate-contributions" cellspacing="0" width="100%" style="font-size:15px">
                    {{-- <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info"> --}}
                        <thead>
                            <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 10px;">N°</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 20px;">SIGLA</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">MATERIA</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 15px;">CANTIDAD</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 15px;">OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- {{ $materias }} --}}
                        @foreach ($carreras as $carrera)
                            @if ($carrera->id==3)
                                @foreach($materias as $materia)
                                    <tr role="row" class="odd">
                                        <td>{{ $j=$j+1 }}</td>
                                        <td>{{ $materia->sigla }}</td>
                                        <td>{{ $materia->materia }}</td>
                                        <td></td> 
                                        <td>
                                        {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente['id'] }}/editar"> --}}
                                        {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente->id }}"> --}}
                                                {{-- <i class="fa fa-edit"></i> --}}
                                                {{-- <i class="fa fa-file-text"></i> --}}
                                            {{-- </a>
                                            <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                                <option>Activo</option>
                                                <option>Desactivo</option>
                                            </select> --}}
                                            <ul>
                                                <a href="">Listar</a>
                                            </ul>
                                            <ul>
                                                <a href="">Calificar</a>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach      
                            @else
                                {{-- <tr role="row" class="odd">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>    
                                    <td> --}}
                                        {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente['id'] }}/editar"> --}}
                                        {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente->id }}"> --}}
                                        {{-- <i class="fa fa-edit"></i> --}}
                                        {{-- <i class="fa fa-file-text"></i>
                                        </a>
                                        <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                        <option>Activo</option>
                                        <option>Desactivo</option>
                                        </select>
                                    </td>
                                </tr>       --}}
                            @endif    
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">N°</th>
                                <th rowspan="1" colspan="1">SIGLA</th>
                                <th rowspan="1" colspan="1">MATERIA</th>
                                <th rowspan="1" colspan="1">CANTIDAD</th>
                                <th rowspan="1" colspan="1">OPCIONES</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>    
        </div>
    </div>
  <!-- /.box-body -->
</div>


@endsection