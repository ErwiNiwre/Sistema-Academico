@extends('layouts.incos_inicio')

@section('content')

<section class="content col-xs-12 col-lg-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user"></i> Datos pesonales</h3>
            <button type="button" class="btn btn-success pull-right">
                <i class="fa fa-edit"></i> Editar
            </button>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-striped table-condensed table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th width="150" scope="row">Numero de Item:</th>
                            <td>121323</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Cedula de Identidad:</th>
                            <td>12345 L.P.</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Primer Nombre:</th>
                            <td>Mary</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Segundo Nombre:</th>
                            <td>Jeanneth</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Apellido Paterno:</th>
                            <td>Villamil</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Apellido Materno:</th>
                            <td>Peñaloza</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Género:</th>
                            <td>Femenino</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Correo electrónico:</th>
                            <td>asassas@gmail.COM</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Telefono:</th>
                            <td>222227</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Celular:</th>
                            <td>77455445</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Fecha de nacimiento:</th>
                            <td>1992-12-10</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Estado Civil:</th>
                            <td>Soltera</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Edad:</th>
                            <td>27 años</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Dirección:</th>
                            <td>AV. ANCHALLANI</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Fecha Ingreso:</th>
                            <td>1992-12-10</td>
                        </tr>
                        <tr>
                            <th width="150" scope="row">Antiguedad:</th>
                            <td>7 años</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <a href="/perfil/editar" class="btn btn-primary btn-lg"><i class="fa fa-edit"></i> Editar</a>
            </div>
        </div>
    </div>
</section>


@endsection