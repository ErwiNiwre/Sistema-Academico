@extends('layouts.incos_inicio')

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Cursos Designados</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group" id="example1_length">
                    {{-- {{ Form::select('carrera', $carrera, null, ['class' => 'form-control select2','placeholder' => 'Select a client...']) }} --}}
                        <label>Cursos: 
                            {{-- {{ $docentes }} --}}
                            {{-- <form method="post" action="{{ route('docentes.carreras') }}" name="carre"> --}}
                            <select  class="form-control" name="carrera">
                              {{-- @foreach ($carreras as $carrera)
                              @if ($carrera->id==3)
                                <option value="{{ $carrera->id }}" selected>{{ $carrera->carrera }}</option>  
                              @else
                                <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>
                              @endif
                                    
                              @endforeach --}}
                            </select> 
                        </label>
                    </div>
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                        <i class="fa fa-list-ol"></i> Mostrar
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row no-print">
                        <div class="col-xs-12">
                            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generar PDF
                            </button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
  <!-- /.box-body -->
</div>
<div class="box">
<section class="content">
    
    <form class="form-horizontal" action="#" method="POST">
        {{ csrf_field() }}
        <div class="row box-body table-responsive col-sm-12">
            @include('docentes.listas_estudiantes.listar')
            {{-- <div class="box-footer">
                sdd
                <button type="submit" class="btn btn-info pull-center">Guardar</button>
            </div> --}}
        </div>
    </form>
    
</section>
</div>
@endsection