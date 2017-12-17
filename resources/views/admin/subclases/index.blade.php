<div class="x_panel">
  <div class="x_title">
    <h2>Registros de subclases de servicio</h2>
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
        Bienvenido a la seccion de administracion de subclases de servicio, aqui podra registrar, visualizar, actualizar o eliminar una subclase.
      </p>
      <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datatable_wrapper">
        <div class="row">
          <div class="table-responsive">
            <table id="t_data_tables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th data-priority="1">Subclase</th>
                  <th data-priority="2" width="1%">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Area Quirurgica</td>
                  <td><a href="{{route('subclases.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Cirugia plastica</td>
                  <td><a href="{{route('subclases.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
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
