@extends('layouts.incos_inicio')

@section('titulo')
    Docentes
@endsection
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row text-center">
    {{--  <a href="{{route('show_contribution', $affiliate->id)}}" >  --}}
      <button class="btn btn-info btn-sm  dim" type="button" data-toggle="tooltip" data-placement="top" title="Ver Aportes"><i class="fa fa-dollar"></i> </button>
    </a>
    {{--  <a href="{{route('show_aid_contribution', $affiliate->id)}}" >  --}}
      <button class="btn btn-info btn-sm  dim" type="button" data-toggle="tooltip" data-placement="top" title="Aportes Auxilio Mortuorio"><i class="fa fa-dollar"></i> </button>
    </a>
  </div>
  <div class="row">
    <div class="col-md-6">
      k
    </div>
    <div class="col-md-6">
      klkl
    </div>
    <div class="col-md-6">
          @include('docentes.datos_docente')
    </div>
  </div>
</div>
@endsection