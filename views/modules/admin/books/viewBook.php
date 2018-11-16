 <div class="col-9 tab-show">
    <div class="tab-content row justify-content-end" id="v-pills-adminbook">
      <div class="tab-pane fade show active" id="v-pills-search" role="tabpanel">
        <input name="book-title" id="book-title" class="form-control col-12" type="text" placeholder="Titulo del libro" required>
        <input class="col-4" type="submit" name="search" value="buscar" >

        <?php
          require_once("../../../../controllers/BookController.php");
          require_once("../../../../models/BookModel.php");  
          $book = new BookController();
              $books = $book->create();

             foreach ($books as $key => $value){
                echo '<div class="col-3">
                        <div class="card book">
                          <div class="card-body ">
                            <img src="../../../assets/images/cover.png" class="img-fluid" alt="">
                                <span style="color:blue">'.$value["libro_titulo"].'</span> 
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="'.$value["autor_nombre"]." ".$value["autor_apellido"].'">perm_identity</a>
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="'.$value["nombre"].'">reorder</a>
                                  <a class="info material-icons col-4" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Disponible<br>No disponible">remove_red_eye</a>
                           </div> 
                       </div>  
                    </div>' ;}
          ?>  
      </div>
      </div>
    </div>