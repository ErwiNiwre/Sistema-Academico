<div class="box-header with-border">
    <h3 class="box-title">Usuario</h3>
</div>
<form class="form-horizontal">
    <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Usuario:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Carnet de Identidad">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Rol:</label>
            <div class="col-sm-10">
                <select name="rol" aria-controls="example1" class="form-control input-sm">
                    @foreach ($roles as $rol)
                        <option value="{{ $rol['id']}}">{{ $rol['rol']}}</option>    
                    @endforeach
                </select> 
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Guardar</button>
    </div>
</form>
