<div class="box-header with-border">
    <h3 class="box-title">Datos</h3>
</div>

<form class="form-horizontal" action="{{ route('docentes.store') }}" method="POST">
    {{ csrf_field() }}
    @include('docentes._form')
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Guardar</button>
    </div>
</form>
