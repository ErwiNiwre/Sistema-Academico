<div class="box-header with-border">
    <h3 class="box-title">Usuario</h3>
</div>
<form class="form-horizontal" action="{{route('registrar')}}" method="POST">
    <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Usuario:</label>
            <div class="col-sm-10">
                <input name="usuario" type="text" class="form-control" id="inputEmail3" placeholder="Carnet de Identidad">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
            <div class="col-sm-10">
                <input name="contrasena" type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Guardar</button>
    </div>
</form>
