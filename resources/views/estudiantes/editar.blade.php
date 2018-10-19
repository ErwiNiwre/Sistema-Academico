@extends('layouts.incos_inicio')

@section('titulo')
    ESTUDIANTE: {{ $estudiantes->nombre." ".$estudiantes->aPaterno." ".$estudiantes->aMaterno }}
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="box box-danger">
            <div class="box-header with-border">
                    <h3 class="box-title">Datos</h3>
            </div>    
            <form class="form-horizontal" action="/Estudiantes/{{ $estudiantes->id }}" method="POST" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                {{-- @method('PATCH')
                @csrf --}}

                @include('estudiantes._form')
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
    