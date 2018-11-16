<?php  
  require_once("../../../../controllers/LoanController.php");
  require_once("../../../../models/LoanModel.php");

  $loan = new LoanController();
  $loans = $loan->create();
?>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Socio</th>
      <th scope="col">Libro</th>
      <th scope="col">Fecha de Prestamo</th>
      <th scope="col">Fecha de Devolucion</th>
    </tr>
  </thead>
  <tbody>
    
      <?php 
        foreach ($loans as $key => $value) {
          echo "<tr><td>". $value["usuario_nombre"]." ". $value["usuario_apellido"]."</td>
                  <td>". $value["libro_titulo"] ."</td> 
                  <td>". $value["prestamo_entrega"] ."</td> 
                  <td>". $value["prestamo_devolucion"] ."</td> 
                </tr>";
        }
      ?>
    
  </tbody>
</table>