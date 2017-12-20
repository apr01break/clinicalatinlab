@extends('admin.layouts.admin')

@section('title', 'Examenes')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registros de examenes</h2>
        <ul class="nav navbar-right panel-toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="display: block;">
        <form class="form-horizontal form-label-left" action="" method="post">
          <p class="text-muted font 13 m-b-30">
            Bienvenido a la seccion de examenes, aqui podra registrar, visualizar, actualizar o eliminar un paciente.
          </p>
          <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datatable_wrapper">
            <div class="row">
              <div class="table-responsive">
                <table id="t_data_tables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th data-priority="1">Codigo de solicitud</th>
                      <th>Examen</th>
                      <th>Paciente</th>
                      <th data-priority="2" width="1%">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>00001</td>
                      <td>Hematologia</td>
                      <td>LICIA NUÑES</td>
                      <td><a href="{{route('examenes.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="{{route('examenes.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>000002</td>
                      <td>Microbiologia</td>
                      <td>LICia MARIA</td>
                      <td><a href="{{route('examenes.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="{{route('examenes.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>0003</td>
                      <td>Citogenetica</td>
                      <td>LICIA RODRIGUES</td>
                      <td><a href="{{route('examenes.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="{{route('examenes.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>                          
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('style')
<!--DataTable-->
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">
<!--nprogress-->
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--DataTable-->
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/responsive.bootstrap.min.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){$("#t_data_tables").DataTable()});
</script>
@endsection
