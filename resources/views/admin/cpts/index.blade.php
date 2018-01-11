@extends('admin.layouts.admin')

@section('title', 'Cpt')
@section('title-right')
<div>
  <a href="{{route('cpts.create')}}" class="btn btn-primary">Crear Cpt</a>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registros de Cpts</h2>
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
            Bienvenido a la seccion de administracion de cpts, aqui podra registrar, visualizar, actualizar o eliminar un paciente.
          </p>
          <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datatable_wrapper">
            <div class="row">
              <div class="table-responsive">
                <table id="t_data_tables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th data-priority="1">Descripcion</th>
                      <th data-priority="2" width="1%">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cpts as $cpt)
                    <tr>
                      <td>{{$cpt->descripcion}}</td>
                      <td><a href="{{route('cpts.edit',$cpt->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    @endforeach
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
@include('admin.cpts.destroy')
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
