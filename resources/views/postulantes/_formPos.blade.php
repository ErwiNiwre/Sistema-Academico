<div class="row">
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Documentos</h3>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-12">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked">
                    Cedula de Identidad
                </label>        
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked">
                    Certificado de Nacimiento
                </label>        
            </div>
            <div class="col-md-6">
                    <input type="text" class="form-control" id="certificadoNacimiento" name="certificadoNacimiento" placeholder="N° de Folio">
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked">
                    Titulo de Bachiller
                </label>        
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="tituloBachiller" name="tituloBachiller" placeholder="N° Titulo de Bachiller">
            </div>
        </div>
        
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>
                    <input type="checkbox" class="icheckbox_flat-green checked">
                    N° de Deposito Bancario
                </label>        
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="depositoBancario" name="depositoBancario" placeholder="N° Deposito">
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Inscripción</h3>
        </div>
        <div class="form-group col-md-12">
            <label>Carrera</label>
                @if (isset($postulante))
                    <select name="carrera" id="carrera" aria-controls="example1" class="form-control input-sm">
                        @foreach ($carreras as $carrera)
                            @if ($postulante->carrera_id==$carrera->id)
                            <option value="{{ $carrera->id }}" selected>{{ $carrera->carrera }}</option> 
                            @else
                            <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option> 
                            @endif
                        @endforeach
                    </select> 
                @else
                    <select name="carrera" id="carrera" aria-controls="example1" class="form-control input-sm">
                        @foreach ($carreras as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->carrera }}</option> 
                        @endforeach
                    </select> 
                @endif
        </div>
        <div class="form-group col-md-12">
            <label>Turno</label>
                @if (isset($postulante))
                    <select name="turno" id="turno" aria-controls="example1" class="form-control input-sm">
                        @foreach ($turnos as $turno)
                            @if ($postulante->turno_id==$turno->id)
                            <option value="{{ $turno->id }}" selected>{{ $turno->turno }}</option> 
                            @else
                            <option value="{{ $turno->id }}">{{ $turno->turno }}</option> 
                            @endif
                        @endforeach
                    </select> 
                @else
                    <select name="turno" id="turno" aria-controls="example1" class="form-control input-sm">
                        @foreach ($turnos as $turno)
                            <option value="{{ $turno->id }}">{{ $turno->turno }}</option> 
                        @endforeach
                    </select> 
                @endif
        </div>
    </div>
    <div class="col-md-12">
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales</h3>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-8">
                    <label>Cedula de Identidad</label>
                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Cedula de Identidad">
                </div>
                <div class="col-md-4">
                    <label>Expedido</label>
                    @if (isset($postulantes))
                        <select name="expedido" id="expedido" aria-controls="example1" class="form-control input-sm">
                            @foreach ($departamentos as $departamento)
                                @if ($postulante->expedido==$departamento->id)
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
            <div class="form-group">
                <div class="col-md-12">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Paterno</label>
                    <input type="text" class="form-control" id="aPaterno" name="aPaterno" placeholder="Apellido Paterno">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Materno</label>
                    <input type="text" class="form-control" id="aMaterno" name="aMaterno" placeholder="Apellido Materno">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Fecha Nacimiento</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="1980-01-01">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <label>Nota</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nota" name="nota">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Genero</label>
                    @if (isset($Postulantes))
                        <select class="form-control" name="genero">
                            @if ($postulantes->genero=='M')
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
                <div class="col-md-6">
                    <label>Estado Civil</label>
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
            
            <div class="form-group">
                <div class="col-md-12">
                    <label>Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label>Telefono</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Celular</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="celular" name="celular">
                    </div>
                </div>
            </div>
        </div>                
    </div>
</div>