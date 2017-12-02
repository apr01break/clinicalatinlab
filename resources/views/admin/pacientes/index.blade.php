@extends('admin.layouts.admin')

@section('title', 'Pacientes')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registro de pacientes</h2>
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
            Bienvenido a la seccion de administracion de pacientes, aqui podra registrar, visualizar, actualizar o eliminar un paciente.
          </p>
          <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datatable_wrapper">
            <div class="row">
              <div class="table-responsive">
                <table id="t_pacientes" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th data-priority="1">Nombre</th>
                      <th>Historia</th>
                      <th>DNI</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Fecha de Registro</th>
                      <th data-priority="2">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Alexis Jesus Peralta Holyoak</td>
                      <td>111111</td>
                      <td>73237155</td>
                      <td>24/10/1997</td>
                      <td>20/20/1990</td>
                      <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>TITO NIEVES</td>
                      <td>222222</td>
                      <td>73237155</td>
                      <td>24/10/1997</td>
                      <td>20/20/1990</td>
                      <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>JUANA LA CUBANA</td>
                      <td>3333333</td>
                      <td>73237155</td>
                      <td>24/10/1997</td>
                      <td>20/20/1990</td>
                      <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></a>
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
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">
@endsection
@section('script')
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/responsive.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#t_pacientes').DataTable();
});
</script>
@endsection
