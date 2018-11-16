<?php 
  include("../head.php"); 
  include("../header.php");
?>
<div class="row">
  <div class="col-2 menu-loans">
    <div class="nav flex-column nav-pills mt-4" id="v-pills-adminbook-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab"><span class="material-icons">search</span> Buscar libro</a>
      <a class="nav-link" id="v-pills-newbook-tab" data-toggle="pill" href="#v-pills-newbook" role="tab"><span class="material-icons">library_add</span> Agregar nuevo</a>
      <a class="nav-link" id="v-pills-buybook-tab" data-toggle="pill" href="#v-pills-buybook" role="tab"><span class="material-icons">create_new_folder</span> Solicitar libros</a>
      <a class="nav-link" id="v-pills-digitalbook-tab" data-toggle="pill" href="#v-pills-digitalbook" role="tab"><span class="material-icons">picture_as_pdf</span> Libros digitales</a>
    </div>
  </div>
  <div class="col-9 tab-show" >
    <div class="tab-content row justify-content-end" id="v-pills-adminbook">
      <div class="tab-pane fade show col-11  active" id="v-pills-search" role="tabpanel">
        <form method="post" class="row">
          <input name="book-title" id="book-title" class="form-control col-6" type="text" placeholder="Titulo del libro" required>
          <input class="col-4" type="submit" name="search" value="buscar" class="btn btn-primary form-control col-6">
        </form>
        <?php
          require_once("../../../../controllers/BookController.php");
          require_once("../../../../models/BookModel.php");  
            $librito = new BookController();
            $libritoBuscado=$librito->search();
            foreach ($libritoBuscado as $key => $value) {
              echo'<div class="col-3">
                        <div class="card book">
                          <div class="card-body ">
                            <img src="../../../assets/images/cover.png" class="img-fluid" alt="">
                                <span style="font-size:16pt" style="color:black" style="font-weight" ">'.$value["libro_titulo"].'</span> 
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="'.$value["autor_nombre"]." ".$value["autor_apellido"].'">perm_identity</a>
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="'.$value["nombre"].'">reorder</a>
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Disponible<br>No disponible">remove_red_eye</a>
                           </div> 
                       </div>  
                    </div>' ;   }
  
       ?>  
      </div>
      <div class="tab-pane fade" id="v-pills-newbook" role="tabpanel">
        <?php include("create.php") ;?>
      </div>
      <div class="tab-pane fade" id="v-pills-search" role="tabpanel">
        <?php include("viewBook.php") ;?>
      </div>
      <div class="tab-pane fade" id="v-pills-buybook" role="tabpanel">...</div>
      <div class="tab-pane fade" id="v-pills-digitalbook" role="tabpanel">...</div>
    </div>

    <div class="tab-pane fade col-11" id="v-pills-newbook" role="tabpanel">
       <?php //
include("create.php") ;?>
    </div>
    <div class="tab-pane fade col-11" id="v-pills-search" role="tabpanel">
    <?php //
include("viewBook.php") ;?>
    </div>
    </div>
    <div class="tab-pane fade" id="v-pills-buybook" role="tabpanel">...</div>
    <div class="tab-pane fade" id="v-pills-digitalbook" role="tabpanel">...</div>

  </div>
</div>

<?php 
  require_once("../../../../controllers/BookController.php");
  require_once("../../../../models/BookModel.php");
/*
  $librito = new BookController();
  $libritoBuscado=$librito->search();
  foreach ($libritoBuscado as $key => $value) {
    echo'libro:' .$value["libro_titulo"].'';   
  } */

  include("../foot.php");
?>
