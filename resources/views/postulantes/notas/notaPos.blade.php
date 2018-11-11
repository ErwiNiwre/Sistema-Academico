{{--  <form class="form-horizontal" action="{{ route('estudiantes.update', $estudiantes) }}" method="POST" role="form">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        @include('estudiantes._form')
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Guardar</button>
        </div>
    </form>  --}}
<form class="form-horizontal" action="{{ route('postulantes.nota', $postulantes) }}" method="POST">
    {{ method_field('PATCH') }}    
    {{ csrf_field() }}
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">POSTULANTE</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-header with-border">
                            <h3 class="box-title">Notas</h3>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Cedula de Identidad</label>
                                {{ $postulantes->ci.' '.$departamentos->abreviatura }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Nombre</label>
                                {{ $postulantes->nombre }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Paterno</label>
                                {{ $postulantes->aPaterno }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Materno</label>
                                {{ $postulantes->aMaterno }}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Nota</label>
                                <input type="text" class="form-control" id="nota" name="nota" placeholder="Colocar Nota">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success btn-flat pull-right">Guardar</button>
                    </div>                
                </div>
            </div>
        </div>
    </form>
    


{{--  <div class="modal fade" tabindex="-1" role="dialog" id="ventana1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Registrar Nota</h4>
      </div>
      <div class="modal-body">
        <form>
          {{ @csrf }}
          <div class="form-group">
            <div class="col-md-8">
              <label>Postulante: </label>{{ $postulante->aPaterno." ".$postulante->aMaterno." ".$postulante->nombre }}
              <label>Cedula de Identidad</label>
              <input type="text" class="form-control" id="ci" name="ci" value="{{ $postulante->ci }}">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label>Nota</label>
              <input type="text" class="form-control" id="nota" name="nota" placeholder="Nota">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  --}}