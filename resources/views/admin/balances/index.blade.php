@extends('admin.layouts.admin')

@section('title', 'Balance')
@section('title-right')
<div>
  <a href="{{route('balances.create')}}" class="btn btn-primary">Registrar</a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ingresos y egresos</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <ul class="stats-overview">
            <li>
              <span class="name">Utilidad total</span>
              <span class="value text-success">500</span>
            </li>
            <li>
              <span class="name">Total invertido</span>
              <span class="value text-success">3000</span>
            </li>
            <li>
              <span class="name">Total ganado</span>
              <span class="value text-success green">3500</span>
            </li>
          </ul>
          <div class="app">
            {!! $chart->html() !!}
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ingresos y egresos</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="datatable-buttons wrapper form-inline dt-bootstrap no-footer" id="datatable-buttons_wrapper">
            <div class="table-responsive">
              <table id="t_data_tables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th data-priority="1">Razon financiera</th>
                    <th>Tipo</th>
                    <th>Monto</th>
                    <th>Fecha de registro</th>
                    <th data-priority="2" width="1%">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Pago a personal</td>
                    <td>Egreso</td>
                    <td>200</td>
                    <td>20/20/1999</td>
                    <td><a href="{{route('pacientes.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                        <a href="{{route('areas.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Cuenta por cobrar</td>
                    <td>Ingreso</td>
                    <td>300</td>
                    <td>20/09/1800</td>
                    <td><a href="{{route('pacientes.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                        <a href="{{route('areas.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Compra de materiales</td>
                    <td>Egreso</td>
                    <td>2000</td>
                    <td>20/20/2017</td>
                    <td><a href="{{route('pacientes.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                        <a href="{{route('areas.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('style')
<!--DataTable-->
<link rel="stylesheet" href="{{secure_asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('css/responsive.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{secure_asset('css/buttons.dataTables.min.css')}}">
<!--nprogress-->
<link rel="stylesheet" href="{{secure_asset('css/nprogress.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{secure_asset('css/custom.min.css')}}">

@endsection

@section('script')
<!--DataTable-->
<script type="text/javascript" src="{{secure_asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('js/vfs_fonts.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#t_data_tables").DataTable({
      dom: 'Bfrtip',
      buttons:[{
        extend: 'pdf',
           footer: true,
           title:'Reporte de ingresos y egresos',
           exportOptions: {
                columns: [0,1,2,3]
            }
      },
      {
            extend: 'excel',
            title:'Reporte de ingresos y egresos',
            exportOptions: {
                columns: [0,1,2,3]
             }
      },
      {
            extend: 'print',
            title:'Reporte de ingresos y egresos',
            exportOptions: {
                columns: [0,1,2,3]
             }
      }]
    });
  });
</script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{secure_asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{secure_asset('js/nprogress.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{secure_asset('js/custom.min.js')}}"></script>
<!--charts-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.7/highcharts.js"></script>
{!!$chart->script()!!}
@endsection
