<div  class="modal fade" id="create-autor" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Crear nuevo autor</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post">
          <div class="form-group">
            <input name="autor-name" type="text" class="form-control" id="new-name-autor" placeholder="Nombre del autor" required>
          </div>
          <div class="form-group">
            <input name="autor-lastname" type="text" class="form-control" id="new-lastname-autor" placeholder="Apellido del autor" required>
          </div>
          <div class="modal-footer">
            <button type="submit" name="create-autor" class="btn btn-primary">Crear</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<?php 
  require_once("../../../../controllers/AuthorController.php");
  require_once("../../../../models/AuthorModel.php");


    $createAuthor = new AuthorController();
    $createAuthor->store();
  
?>