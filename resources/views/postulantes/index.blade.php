<div class="pull-right">
    <div class="form-group">
        <div class="col-md-12">
            <div class="col-md-6 pull-left">
                <label>Nota</label>
            </div>
            <div class="col-md-6">
                <h1>60</h1>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Datos Personales</h3>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Cedula de Identidad</label>
                    {{ $postulantes->ci.' '.$departamentos->abreviatura }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Nombre</label>
                    {{ $postulantes->nombre }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Paterno</label>
                    {{ $postulantes->aPaterno }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Materno</label>
                    {{ $postulantes->aMaterno }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Fecha Nacimiento</label>
                    {{ $postulantes->fechaNacimiento }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Genero</label>
                        @if($postulantes->genero=='M')
                            MASCULINO
                        @else
                            FEMENINO
                        @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Estado Civil</label>
                        @if($postulantes->estadoCivil=='S')
                            SOLTERO
                        @else
                            @if ($postulantes->estadoCivil=='C')
                            CASADO    
                            @else
                                VIUDO
                            @endif
                        @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Correo</label>
                    {{ $postulantes->correo }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Direccion</label>
                    {{ $postulantes->direccion }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Telefono</label>
                    {{ $postulantes->telefono }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label>Celular</label>
                    {{ $postulantes->celular }}
                </div>
            </div>
        </div>                
    </div>
    
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Inscripción</h3>
        </div>
        <div class="form-group col-md-12">
            <label>Carrera</label>
            {{ $carrera_id->carrera }}
        </div>
        <div class="form-group col-md-12">
            <label>Turno</label>
            {{ $turno_id->turno }}
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="box-header with-border">
            <h3 class="box-title">Documentos</h3>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-12">
                <label>Cedula de Identidad</label>
                {{ $documentos->documento_ci }}
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>Certificado de Nacimiento</label>
                {{ $documentos->certificadoNacimiento }}
            </div>
        </div>
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>Titulo de Bachiller</label>
                {{ $documentos->tituloBachiller }}        
            </div>
        </div>
        
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <label>N° de Deposito Bancario</label>
                {{ $documentos->depositoBancario }}        
            </div>
        </div>
    </div>
</div>