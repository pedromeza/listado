<!-- Modal -->
<div class="modal fade" id="agregaruser" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content bgColorWhite">
      <div class="modal-header modalcolor">
        <h4 class=" letracolor">Agregar usuario</h4>
          <button type="button" class="close blanco" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <input type="hidden" id="token" name="token" value="{{ csrf_token() }}" />
            <div class="form-group">
              <!-- Mensajes exitosos -->
              <div id="msj-success" class="alert alert-success" role="alert" style="display:none">
                  Usuario agregado correctamente
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <!-- Mensajes de error -->
            </div>
                  <label for="">Nombre</label>
                  <input type="text" name="name" value="" id="name" class="form-control">
                  <div id="msj-error" class="alert-danger" role="alert" style="display:none">
                      <strong class="help-block blanco" id="msj"></strong>
                  </div>

                  <label for="">Apellido Paterno</label>
                  <input type="text" name="apaterno" id="apaterno" value="" class="form-control">
                  <div id="msj-error1" class="alert-danger" role="alert" style="display:none">
                      <strong class="help-block blanco" id="msj1"></strong>
                  </div>
                  <label for="">Apellido Materno</label>
                  <input type="text" name="amaterno" id="amaterno" value="" class="form-control">
                  <div id="msj-error2" class="alert-danger" role="alert" style="display:none">
                      <strong class="help-block blanco" id="msj2"></strong>
                  </div>

                  <label for="">RFC</label>
                  <input type="text" name="rfc" id="rfc" value="" class="form-control">
                  <div id="msj-error3" class="alert-danger" role="alert" style="display:none">
                      <strong class="help-block blanco" id="msj3"></strong>
                  </div>
                  <label for="">Fecha de Nacimiento </label>
                  <input type="date" name="fechanacimiento" id="fechanacimiento" value="" class="form-control">
                  <div id="msj-error4" class="alert-danger" role="alert" style="display:none">
                      <strong class="help-block blanco" id="msj4"></strong>
                  </div>

                </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-outline btnCreate" id="btnCreate" data-dismiss="modal" value="Guardar" />
      </div>
    </div>

  </div>
</div>

<!-- Large modal -->
