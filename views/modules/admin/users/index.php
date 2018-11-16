<?php 
  include("../head.php"); 
  include("../header.php");
?>

<div class="row">
  <div class="col-2 menu-loans">
    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab"><span class="material-icons">search</span>Mostrar</a>
      <a class="nav-link" id="v-pills-newuser-tab" data-toggle="pill" href="#v-pills-newuser" role="tab"><span class="material-icons">library_add</span> Agregar nuevo</a>
      <a class="nav-link" id="v-pills-moroso-tab" data-toggle="pill" href="#v-pills-moroso" role="tab"><span class="material-icons">report_problem</span> Ver moroso</a>
    </div>
  </div>
  <div class="col-9 row tab-show">
    <div class="tab-content justify-content-end" id="v-pills-tabContent">
      <div class="tab-pane fade show active col-4 row" id="v-pills-search" role="tabpanel">              
        <?php
          require_once("../../../../controllers/UserController.php");
          require_once("../../../../models/UserModel.php");
          $usuarito = new UserController();
          $usuaritoBuscado = $usuarito->create();
          foreach ($usuaritoBuscado as $key => $value) {
            echo'<div class="col-12">
                        <div class="card user">
                          <div class="card-body ">
                            <img src="../../../assets/images/Userimagen.jpeg" class="img-fluid" alt="">  
                            <span style="font-size:16pt" style="color:black" style="font-weight"">'.$value["usuario_nombre"]." ". $value["usuario_apellido"].'</span>                            
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="'.$value["usuario_nombre"]." ".$value["usuario_apellido"].'>perm_identity</a>
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="'.$value["usuario_nombre"].'">reorder</a>
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Disponible<br>No disponible">remove_red_eye</a>
                           </div> 
                       </div>  
                    </div>' ;   }
  
          
        ?> 
         
      </div>
      <div class="tab-pane fade col-11" id="v-pills-newuser" role="tabpanel">
        <?php include("create.php") ?>
      </div>
      <div class="tab-pane fade" id="v-pills-moroso" role="tabpanel">...</div>
    </div>
  </div>
</div>

<?php include("../foot.php"); ?>