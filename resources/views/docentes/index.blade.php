<div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-user"></i> Datos Docente</h3>
    <a type="button" class="btn btn-success pull-right" href="{{ route('docentes.edit', $docentes) }}">
        <i class="fa fa-edit"></i>
    </a>
{{-- <a href="{{ route('docentes.editar') }}">Editar</a> --}}
</div>
<div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-condensed table-bordered table-hover">
            <tbody>
                <tr>
                    <th width="150" scope="row">Numero de Item:</th>
                    <td>{{ $docentes->item }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Cedula de Identidad:</th>
                    <td>{{ $docentes->ci }} 
                        @foreach ($departamentos as $departamento)
                            @if ($docentes->expedido==$departamento->id)
                               <strong> {{ $departamento->abreviatura }} </strong>
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th width="150" scope="row">Apellido Paterno:</th>
                    <td>{{ $docentes->aPaterno }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Apellido Materno:</th>
                    <td>{{ $docentes->aMaterno }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Nombres:</th>
                    <td>{{ $docentes->nombre }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Fecha de Nacimiento:</th>
                    <td>{{ $docentes->fechaNacimiento }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Género:</th>
                    <td>
                        @if($docentes->genero=='M')
                            MASCULINO
                        @else
                            FEMENINO
                        @endif
                    </td>
                </tr>
                <tr>
                    <th width="150" scope="row">Estado Civil:</th>
                    <td>
                        @if($docentes->estadoCivil=='S')
                            SOLTERO
                        @else
                            @if ($docentes->estadoCivil=='C')
                            CASADO    
                            @else
                                VIUDO
                            @endif
                        @endif
                    </td>
                </tr>
                <tr>
                    <th width="150" scope="row">Fecha de Ingreso:</th>
                    <td>{{ $docentes->fechaIngreso }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Correo electrónico:</th>
                    <td>{{ $docentes->correo }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Dirección:</th>
                    <td>{{ $docentes->direccion }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Telefono:</th>
                    <td>{{ $docentes->telefono }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Celular:</th>
                    <td>{{ $docentes->celular }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Edad:</th>
                    <td>27 años</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Antiguedad:</th>
                    <td>7 años</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- <div class="text-center">
        <a href="/perfil/editar" class="btn btn-primary btn-lg"><i class="fa fa-edit"></i> Editar</a>
    </div> --}}
</div>

{{-- <div style="display: block;" id="edit_group_edit_security_users_2">
        <p id="fpassword">
            <label title="Campo obligatorio">
                <span class="noempty">* </span>Contraseña anterior
            </label>
            <span class="control">
                <input id="password_picker" name="edit_security_users[password]" class="password" type="password" size="15">
            </span>
        </p>
        <p id="fnew_password">
            <label title="Campo obligatorio">
                <span class="noempty">* </span>Nueva contraseña
            </label>
            <span class="control"><input id="new_password_picker" name="edit_security_users[new_password]" class="password" type="password" size="15">
            </span>
        </p>
        <p>
            <label>Confirmar</label>
            <input id="new_password_picker_confirm" name="edit_security_users[new_password_confirmation]" class="password" type="password" size="15">
            <span class="editor-control-description">Use al menos 6 caracteres. No utilice la contraseña de otro sitio o algo que sea muy obvio. Trate de combinar con letras en mayúsculas, números o caracteres especiales.
            </span>
        </p>
</div>
 --}}
