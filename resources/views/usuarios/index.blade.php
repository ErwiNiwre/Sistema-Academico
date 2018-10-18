<div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-user"></i> Datos Usuario</h3>
    <a type="button" class="btn btn-success pull-right" href="/Usuarios/{{ $usuarios->id }}/editar">
        <i class="fa fa-edit"></i>
    </a>
{{-- <a href="{{ route('docentes.editar') }}">Editar</a> --}}
</div>
<div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped table-condensed table-bordered table-hover">
            <tbody>
                <tr>
                    <th width="150" scope="row">Usuario:</th>
                    <td>{{ $usuarios->usuario }}</td>
                </tr>
                <tr>
                    <th width="150" scope="row">Password:</th>
                    <td><strong>************</strong></td>
                    {{-- <td><input value="{{ $usuarios->password }}" type="password"></td> --}}
                </tr>
                <tr>
                    <th width="150" scope="row">Rol:</th>
                    <td>
                        @foreach ($roles as $rol)
                            @if ($usuarios->rol_idRol==$rol->id)
                               {{ $rol->rol }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
