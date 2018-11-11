@extends('layouts.incos_inicio')

@section('content')

<center>
    <h1>REGISTRO DE NOTAS</h1>
    <h3>BIMESTRAL</h3>
</center>
<section class="content">
    <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
    </div>
    <form class="form-horizontal" action="#" method="POST">
        {{ csrf_field() }}
        <div class="row box-body table-responsive col-sm-12">
            @include('docentes.notas._form_nota_bi')
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary fa fa-edit">Guardar</button>
            </div>
        </div>
    </form>
    
</section>

@endsection