@extends('layouts.incos_inicio')

@section('titulo')
    DOCENTE: {{ $docentes->nombre." ".$docentes->aPaterno." ".$docentes->aMaterno }}
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="box box-danger">
            <div class="box-header with-border">
                    <h3 class="box-title">Datos</h3>
            </div>    
            <form class="form-horizontal" action="{{ route('docentes.update', $docentes) }}" method="POST" role="form">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                {{-- @method('PATCH')
                @csrf --}}

                @include('docentes._form')
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
    