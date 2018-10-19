@extends('layouts.incos_inicio')

@section('titulo')
    Lista Docente - Carrera
@endsection
@section('content')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group" id="example1_length">
            {{-- {{ Form::select('carrera', $carrera, null, ['class' => 'form-control select2','placeholder' => 'Select a client...']) }} --}}
            <label>Carreras: 
              {{-- {{ $docentes }} --}}
              <select  class="form-control">
                @foreach ($carreras as $carrera)
                  <option value="{{ $carrera['id']}}">{{ $carrera['carrera']}}</option>    
                @endforeach
              </select> 
            </label>
          </div>
        </div>
        <div class="col-sm-6">
            <div id="example1_filter" class="dataTables_filter">
                <label>Search:
                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                </label>
            </div>
            
            <div class="pull-right">
              {{-- <a class="btn btn-social-icon"> --}}
              {{-- <a class="btn btn-default btn-sm" href="{{ url('Docente/registro') }}"> --}}
              <a class="btn btn-social-icon" href="{{ url('Docentes/registro') }}">
                <i class="fa fa-plus-square-o"></i>
              </a>
            </div>
        </div>
       
      </div>
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-striped table-bordered table-hover display" id="datatables-affiliate-contributions" cellspacing="0" width="100%" style="font-size: 10px">
          {{-- <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info"> --}}
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 200px;">Nombre</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 150px;">Paterno</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">Materno</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Cedula Identidad</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">Observaciones</th>
              </tr>
            </thead>
            <tbody>
              @if (isset($docentes))
                @foreach($docentes as $docente)
                <tr role="row" class="odd">
                  <td>{{ $docente->nombre }}</td>
                  <td>{{ $docente->aPaterno }}</td>
                  <td>{{ $docente->aMaterno }}</td>
                  <td>{{ $docente->ci }}</td>    
                  <td>
                    {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente['id'] }}/editar"> --}}
                    <a class="btn btn-social-icon" href="Docentes/{{ $docente->id }}">
                      {{-- <i class="fa fa-edit"></i> --}}
                      <i class="fa fa-file-text"></i>
                    </a>
                    <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                      <option>Activo</option>
                      <option>Desactivo</option>
                    </select>
                  </td>
                </tr>
                @endforeach 
              @else
                <tr role="row" class="odd">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>    
                  <td>
                    {{-- <a class="btn btn-social-icon" href="Docentes/{{ $docente['id'] }}/editar"> --}}
                    <a class="btn btn-social-icon" href="Docentes/{{ $docente->id }}">
                      {{-- <i class="fa fa-edit"></i> --}}
                      <i class="fa fa-file-text"></i>
                    </a>
                    <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                      <option>Activo</option>
                      <option>Desactivo</option>
                    </select>
                  </td>
                </tr>
              @endif
            </tbody>
            <tfoot>
              <tr>
                <th rowspan="1" colspan="1">Nombre</th>
                <th rowspan="1" colspan="1">Paterno</th>
                <th rowspan="1" colspan="1">Materno</th>
                <th rowspan="1" colspan="1">Cedula Identidad</th>
                <th rowspan="1" colspan="1">Observaciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
            Showing 1 to 10 of 57 entries
          </div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            <ul class="pagination">
              <li class="paginate_button previous disabled" id="example1_previous">
                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
              </li>
              <li class="paginate_button active">
                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
              </li>
              <li class="paginate_button ">
                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
              </li>
              <li class="paginate_button ">
                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
              </li>
              <li class="paginate_button ">
                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
              </li>
              <li class="paginate_button ">
                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
              </li>
              <li class="paginate_button ">
                <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
              </li>
              <li class="paginate_button next" id="example1_next">
                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>


@endsection