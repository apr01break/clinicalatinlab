<div class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true"  id="bs-delete-modal-lg" style="display:none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="">Eliminar Registro</h4>
      </div>
      <form class="" id="mdl-delete" action="" method="post">
        <div class="modal-body">

          <h4>¿Esta seguro que desea eliminar el registro del paciente?</h4>
          {{ csrf_field() }}
          <p>Esta acción cambiara el estado del registro del paciente NOMBRE COMPLETO a no disponible, por lo que no se podran realizar ninguna acción relacionada al paciente</p>
          <div class="form-horizontal" style="font-size:large">
            <div class="form-group">
              <div class="col-md-1 col-lg-1 col-xs-0">
              </div>
              <div class="col-md-4 col-lg-4 col-xs-12">
                <p style="text-align: right;"><b>Nombre del paciente:</b> </p>
              </div>
              <div class="col-md-6 col-lg-6 col-xs-12">
                <p name="nombre"></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-1 col-lg-1 col-xs-0">
              </div>
              <div class="col-md-4 col-lg-4 col-xs-12">
                <p style="text-align: right;"><b>Historia: </b></p>
              </div>
              <div class="col-md-6 col-lg-6 col-xs-12">
                <p name="historia"></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-1 col-lg-1 col-xs-0">
              </div>
              <div class="col-md-4 col-lg-4 col-xs-12">
                <p style="text-align: right;"><b>DNI: </b></p>
              </div>
              <div class="col-md-6 col-lg-6 col-xs-12">
                <p name="dni"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" name="button">Eliminar</button>
          <button type="button" class="btn btn-default" name="button" data-dismiss="modal">Cancelar</button>
        </div>
      </form>

    </div>
  </div>
</div>
