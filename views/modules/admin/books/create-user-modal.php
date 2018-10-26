<form method="post" >
  <div  class="modal fade" id="create-User" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add User</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <input name="user-dni" type="number" class="form-control" id="dni-user" placeholder="Numero de DNI" required>
            </div>
            <div class="form-group">
                <input name="user-name" type="text" class="form-control" id="name-user" placeholder="Nombre del Usuario" required>
            </div>
            <div class="form-group">
                <input name="user-lastname" type="text" class="form-control" id="lastname-user" placeholder="Apellido del Usuario" required>
            </div>
            <div class="form-group">
                <input name="user-address" type="text" class="form-control" id="address-usuario" placeholder="Direccion fiscal" required>
            </div>
            <div class="form-group">
                <input name="user-tel" type="number" class="form-control" id="tel-user" placeholder="Numero de Telefono" required>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="enviar">Crear</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

</form>
<?php
  require_once("../../../../controllers/UserController.php");
  require_once("../../../../models/UserModel.php");

    if (isset($_POST["enviar"])) {
      $createEditorial = new UserController();
      $createEditorial->store();
      
    }

?>