<div class="box-body">
            {{-- {{ Form::select('carrera', $carrera, null, ['class' => 'form-control select2','placeholder' => 'Select a client...']) }} --}}
        {{--  <label class="control-label">Carrera:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
               
                <select name="carrera_id" aria-controls="example1" class="form-control input-sm">
                  @foreach ($carreras as $carrera)
                    <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option>    
                  @endforeach
                </select>
            </div>
        </div>
        <label class="control-label">Turno:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
            
                <select  class="form-control">
                  @foreach ($turnos as $turno)
                    <option value="{{ $turno->id }}">{{ $turno->turno }}</option>    
                  @endforeach
                </select>
            </div>
        </div>  --}}
        <label class="control-label">Matricula:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" value="{{ isset($estudiantes) ? $estudiantes->matricula : '' }}" class="form-control" id="matricula" name="matricula" placeholder="Matricula">
            </div>
        </div>
        <label class="control-label">Cedula Identidad:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-6">
                <input type="text" value="{{ isset($estudiantes) ? $estudiantes->ci : '' }}" class="form-control" id="ci" name="ci" placeholder="Carnet de Identidad">
            </div>
            <div class="col-sm-3">
                {{--  {{ $departamento }}  --}}
                @if (isset($estudiantes))
                    <select name="expedido" id="expedido" aria-controls="example1" class="form-control input-sm">
                        @foreach ($departamentos as $departamento)
                            @if ($estudiantes->expedido==$departamento->id)
                            <option value="{{ $departamento->id }}" selected>{{ $departamento->abreviatura }}</option> 
                            @else
                            <option value="{{ $departamento->id }}">{{ $departamento->abreviatura }}</option> 
                            @endif
                        @endforeach
                    </select> 
                @else
                    <select name="expedido" id="expedido" aria-controls="example1" class="form-control input-sm">
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->abreviatura }}</option> 
                        @endforeach
                    </select> 
                @endif
                
            </div>
        </div>
        <label class="control-label">Paterno:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text-transform:uppercase" value="{{ isset($estudiantes) ? $estudiantes->aPaterno : '' }}" class="form-control" id="aPaterno" name="aPaterno" placeholder="Paterno" style="text-transform:uppercase;">
            </div>
        </div>
        <label class="control-label">Materno:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text-transform:uppercase" value="{{ isset($estudiantes) ? $estudiantes->aMaterno : '' }}" class="form-control" id="aMaterno" name="aMaterno" placeholder="Materno">
            </div>
        </div>
        <label class="control-label">Nombres:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text-transform:uppercase" value="{{ isset($estudiantes) ? $estudiantes->nombre : '' }}" class="form-control" id="nombre" name="nombre" placeholder="Nombres">
            </div>
        </div>
        <label class="control-label">Fecha de Nacimiento:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="date" value="{{ isset($estudiantes) ? $estudiantes->fechaNacimiento : '' }}" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
            </div>
        </div>
        <label class="control-label">Genero:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                    @if (isset($estudiantes))
                        <select class="form-control" name="genero">
                            @if ($estudiantes->genero=='M')
                                <option value="M" selected>MASCULINO</option>
                                <option value="F">FEMENINO</option>                    
                            @else
                                <option value="M">MASCULINO</option>
                                <option value="F" selected>FEMENINO</option> 
                            @endif
                        </select> 
                    @else
                    <select class="form-control" name="genero">
                        <option value="M">MASCULINO</option>
                        <option value="F">FEMENINO</option>                    
                    </select>
                    @endif
            </div>
        </div>
        <label class="control-label">Estado Civil:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                    @if (isset($estudiantes))
                        <select class="form-control" name="estadoCivil">
                            @if ($estudiantes->estadoCivil=='S')
                                <option value="S" selected>SOLTERO</option>
                                <option value="C">CASADO</option>
                                <option value="V">VIUDO</option>                    
                            @else
                                @if ($estudiantes->estadoCivil=='C')
                                    <option value="S">SOLTERO</option>
                                    <option value="C" selected>CASADO</option>
                                    <option value="V">VIUDO</option>
                                @else
                                    <option value="S">SOLTERO</option>
                                    <option value="C">CASADO</option>
                                    <option value="V" selected>VIUDO</option>
                                @endif 
                            @endif
                        </select> 
                    @else
                    <select class="form-control" name="estadoCivil">
                        <option value="S">SOLTERO</option>
                        <option value="C">CASADO</option>
                        <option value="V">VIUDO</option>                     
                    </select>
                    @endif
            </div>
        </div>
        <label class="control-label">Correo Electronico:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="email" value="{{ isset($estudiantes) ? $estudiantes->correo : '' }}" class="form-control" id="correo" name="correo" placeholder="Correo Electronico">
            </div>
        </div>
        <label class="control-label">Dirección:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text-transform:uppercase" value="{{ isset($estudiantes) ? $estudiantes->direccion : '' }}" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
            </div>
        </div>
        <label class="control-label">Telefono:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" value="{{ isset($estudiantes) ? $estudiantes->telefono : '' }}" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
            </div>
        </div>
        <label class="control-label">Celular:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text-transform:uppercase" value="{{ isset($estudiantes) ? $estudiantes->celular : '' }}" class="form-control" id="celular" name="celular" placeholder="Celular">
            </div>
        </div>
        <label class="control-label">Pensum:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                    @if (isset($estudiantes))
                        <select class="form-control" name="pensum">
                            @if ($estudiantes->pensum=='ANTIGUO')
                                <option value="ANTIGUO" selected>ANTIGUO</option>
                                <option value="NUEVO">NUEVO</option>                    
                            @else
                                <option value="ANTIGUO">ANTIGUO</option>
                                <option value="NUEVO" selected>NUEVO</option> 
                            @endif
                        </select> 
                    @else
                    <select class="form-control" name="pensum">
                        <option value="ANTIGUO">ANTIGUO</option>
                        <option value="NUEVO">NUEVO</option>                    
                    </select>
                    @endif
            </div>
        </div>
    </div>