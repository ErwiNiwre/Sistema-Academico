@extends('layouts.incos_inicio')

@section('titulo')
    DOCENTE: {{ $docentes->nombre." ".$docentes->aPaterno." ".$docentes->aMaterno }}
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                @include('usuarios.index')
            </div>
            <div class="box box-danger">
                    @include('docentes.index')
            </div>
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                    dd
                </div>
            </div>
        </div>
          
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Carera</h3>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div>
                </form>
            </div>
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">General Elements</h3>
                </div>
                <div class="box-body">
                    <form role="form">
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection