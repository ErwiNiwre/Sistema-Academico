@extends('layouts.incos_inicio')

@section('content')

<center>
    <h1>REGISTRO DE NOTAS</h1>
    <h3>TRIMESTRAL</h3>
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
    <div class="box-body table-responsive">
        <table class="table table-striped">
            <thead class="bg-green-active">
                <tr>
                    <th rowspan="3" class="text-center">N°</th>
                    <th rowspan="3" class="text-center">NÓMINA</th>
                    <th colspan="7" class="text-center">PRIMER TRIMESTRE</th>
                    <th colspan="7" class="text-center">SEGUNDO TRIMESTRE</th>
                    <th colspan="7" class="text-center">TERCER TRIMESTRE</th>
                </tr>
                <tr>
                    {{-- Primer Trimestre --}}
                    <th class="text-center">A.</th>
                    <th class="text-center">C.L.</th>
                    <th class="text-center">Inv.</th>
                    <th class="text-center">P.C.</th>
                    <th class="text-center">T./L.</th>
                    <th class="text-center">EV.</th>
                    <th class="text-center">P.T.</th>
                    {{-- Segundo Trimestre --}}
                    <th class="text-center">A.</th>
                    <th class="text-center">C.L.</th>
                    <th class="text-center">Inv.</th>
                    <th class="text-center">P.C.</th>
                    <th class="text-center">T./L.</th>
                    <th class="text-center">EV.</th>
                    <th class="text-center">P.T.</th>
                    {{-- Tercer Trimestre --}}
                    <th class="text-center">A.</th>
                    <th class="text-center">C.L.</th>
                    <th class="text-center">Inv.</th>
                    <th class="text-center">P.C.</th>
                    <th class="text-center">T./L.</th>
                    <th class="text-center">EV.</th>
                    <th class="text-center">P.T.</th>
                </tr>
                <tr>
                    {{-- Primer Trimestre --}}
                    <th class="text-center">10</th>
                    <th class="text-center">10</th>
                    <th class="text-center">20</th>
                    <th class="text-center">10</th>
                    <th class="text-center">20</th>
                    <th class="text-center">30</th>
                    <th class="text-center">100</th>
                    {{-- Segundo Trimestre --}}
                    <th class="text-center">10</th>
                    <th class="text-center">10</th>
                    <th class="text-center">20</th>
                    <th class="text-center">10</th>
                    <th class="text-center">20</th>
                    <th class="text-center">30</th>
                    <th class="text-center">100</th>
                    {{-- Tercer Trimestre --}}
                    <th class="text-center">10</th>
                    <th class="text-center">10</th>
                    <th class="text-center">20</th>
                    <th class="text-center">10</th>
                    <th class="text-center">20</th>
                    <th class="text-center">30</th>
                    <th class="text-center">100</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Alcon Condori Juan</td>
                    {{-- Primer Trimestre --}}
                    <th>10</th>
                    <th>10</th>
                    <th>20</th>
                    <th>10</th>
                    <th>20</th>
                    <th>30</th>
                    <th>100</th>
                    {{-- Segundo Trimestre --}}
                    <th>10</th>
                    <th>10</th>
                    <th>20</th>
                    <th>10</th>
                    <th>20</th>
                    <th>30</th>
                    <th>100</th>
                    {{-- Tercer Trimestre --}}
                    <th>10</th>
                    <th>10</th>
                    <th>20</th>
                    <th>10</th>
                    <th>20</th>
                    <th>30</th>
                    <th>100</th>
                </tr>
                <tr>
                    <th>2</th>
                    <td>Condori Quispe Pedro</td>
                    {{-- Primer Trimestre --}}
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    {{-- Segundo Trimestre --}}
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    {{-- Tercer Trimestre --}}
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                    <th><input type="text" style="width: 30px"></th>
                </tr>

            </tbody>
        </table>
        <div aling="center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</section>
@endsection