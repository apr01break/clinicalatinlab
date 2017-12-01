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
              <div class="col-sm-6">
                <div class="dataTables_length" id="datatable_length">
                  <label>Mostrar
                    <select class="form-control input-sm" name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                    Registros
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div id="datatable_filter" class="dataTables_filter">
                  <label>Buscar
                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable">
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datable_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="datable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:118px;">Nombres</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="datable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Age: activate to sort column ascending" style="width:39px;">Edad</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="datable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="History: activate to sort column ascending" style="width:39px;">Historia</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="datable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Start date: activate to sort column ascending" style="width:84px;">Fecha de registro</th>
                    </tr>
                  </thead>
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
@endsection
@section('script')
<script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
@endsection
