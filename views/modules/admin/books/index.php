<?php 
  include("../head.php"); 
  include("../header.php");

?>


<div class="row">
  <div class="col-2 menu-loans">
    <div class="nav flex-column nav-pills mt-4" id="v-pills-adminbook-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab"><span class="material-icons">search</span> Buscar</a>
      <a class="nav-link" id="v-pills-newbook-tab" data-toggle="pill" href="#v-pills-newbook" role="tab"><span class="material-icons">library_add</span> Agregar nuevo</a>
      <a class="nav-link" id="v-pills-viewbook-tab" data-toggle="pill" href="#v-pills-viewbook" role="tab"><span class="material-icons">library_books</span> Ver libros</a>
      <a class="nav-link" id="v-pills-buybook-tab" data-toggle="pill" href="#v-pills-buybook" role="tab"><span class="material-icons">create_new_folder</span> Solicitar libros</a>
      <a class="nav-link" id="v-pills-digitalbook-tab" data-toggle="pill" href="#v-pills-digitalbook" role="tab"><span class="material-icons">picture_as_pdf</span> Libros digitales</a>
    </div>
  </div>
  <div class="col-9 tab-show">
    <div class="tab-content row justify-content-end" id="v-pills-adminbook">
      <div class="tab-pane fade show active" id="v-pills-search" role="tabpanel">
        <div class="col-2">
  <div class="card book">
    <div class="card-body text-center">
      <?php
        require_once("../../../../controllers/BookController.php");
            require_once("../../../../models/BookModel.php");
        
        $Book = new BookController();
            $Book = $Book->create();

            foreach ($Book as $key => $value) {
              echo '
        <span class="card-title mt-2 text-center">'.$value["titulo"].'</span>
      <div class="card-footer row justify-content-around mt-2">
        <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="'.$value["autor_nombre"].'
        <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Detalles<br>"'.$value["editorial_nombre"].'"<br>otra informacion<br>año">reorder</a>
        <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Disponible<br>No disponible">remove_red_eye</a>' ;
          }
          ?> 
      </div>
    </div>
  </div>  
</div>

      </div>
      <div class="tab-pane fade col-11" id="v-pills-newbook" role="tabpanel">
        <?php include("create.php") ?>
      </div>
      <div class="tab-pane fade" id="v-pills-viewbook" role="tabpanel">...</div>
      <div class="tab-pane fade" id="v-pills-buybook" role="tabpanel">...</div>
      <div class="tab-pane fade" id="v-pills-digitalbook" role="tabpanel">...</div>
    </div>
  </div>
</div>


<?php   include("../foot.php"); ?>
