<div class="box-body">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Usuario:</label>
        <div class="col-sm-10">
            @if (isset($usuarios))
                <input name="usuario" value="{{ $usuarios->usuario }}" type="text" class="form-control" id="usuario" placeholder="Carnet de Identidad">
            @else
                <input name="usuario" type="text" class="form-control" id="usuario" placeholder="Carnet de Identidad">
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-10">
            <input name="contrasena" value="{{ isset($usuarios) ? $usuarios->password : '' }}" type="password" class="form-control" id="contrasena" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Rol:</label>
        <div class="col-sm-10">
            @if (isset($usuarios))
                <select name="rol" id="rol" disabled aria-controls="example1" class="form-control input-sm">
                @foreach ($roles as $rol)
                    @if ($usuarios->rol_idRol==$rol->id && $usuarios->rol_idRol!=null)
                        <option value="{{ $rol->id }}" selected>{{ $rol->rol }}</option> 
                    {{-- @else
                        <option value="{{ $rol->id }}">{{ $rol->rol }}</option>  --}}
                    @endif
                   
                @endforeach
                </select> 
            @else
                <select name="rol" id="rol" aria-controls="example1" class="form-control input-sm">
                    @foreach ($roles as $rol)
                        <option value="{{ $rol->id }}">{{ $rol->rol }}</option>                    
                    @endforeach
                </select> 
            @endif
            
        </div>
    </div>
</div>