<!-- Modal -->
<div class="modal fade" id="edituser" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content bgColorWhite">
      <div class="modal-header modalcolor">
        <h4 class="letracolor">Editar Usuario</h4>
          <button type="button" class="close blanco" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="token" name="token" value="{{ csrf_token() }}" />
            <input type="hidden" id="id1" name="id1" />
            <label for="">Nombre</label>
            <input type="text"  id="name1" name="name1" class="form-control">
            <div id="msj-error" class="alert-danger" role="alert" style="display:none">
                <strong class="help-block blanco" id="msj"></strong>
            </div>

            <label for="">Apellido Paterno</label>
            <input type="text" name="apaterno1" id="apaterno1" value="" class="form-control">
            <div id="msj-error1" class="alert-danger" role="alert" style="display:none">
                <strong class="help-block blanco" id="msj1"></strong>
            </div>
            <label for="">Apellido Materno</label>
            <input type="text" name="amaterno1" id="amaterno1" value="" class="form-control">
            <div id="msj-error2" class="alert-danger" role="alert" style="display:none">
                <strong class="help-block blanco" id="msj2"></strong>
            </div>

            <label for="">RFC</label>
            <input type="text" name="rfc1" id="rfc1" value="" class="form-control">
            <div id="msj-error3" class="alert-danger" role="alert" style="display:none">
                <strong class="help-block blanco" id="msj3"></strong>
            </div>
            <label for="">Fecha de Nacimiento </label>
            <input type="text" name="fechanacimiento1" id="fechanacimiento1" value="" class="form-control">
            <div id="msj-error4" class="alert-danger" role="alert" style="display:none">
                <strong class="help-block blanco" id="msj4"></strong>
            </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-footer">
              <input type="button" class="btn btn-outline btn-success" id="editar" value="Guardar" />
            </div>
      </div>
    </div>
  </div>
</div>
