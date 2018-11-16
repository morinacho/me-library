<?php 
	
	class LoanModel{
		public function storeModel($request){
			$query = ConexionModel::conect()->prepare("INSERT INTO prestamo(prestamo_entrega, prestamo_devolucion, usuario_dni, libro_isbn)
 													   VALUES (:fechaEntrega, :fechaDevolucion, :usuario_dni, :libro_isbn)");

			$fechaPrestamo = date("Y-m-d H:i:s");
			$fechaDevolucion = strtotime ( '+7 day' , strtotime ( $fechaPrestamo ) ) ;
			$fechaDevolucion = date ( 'Y-m-j' , $fechaDevolucion );
			
			$query -> bindParam(":fechaEntrega", $fechaPrestamo, PDO::PARAM_STR);
			$query -> bindParam(":fechaDevolucion", $fechaDevolucion, PDO::PARAM_STR);
			$query -> bindParam(":usuario_dni", $request["usuario_dni"], PDO::PARAM_INT);
			$query -> bindParam(":libro_isbn", $request["libro_isbn"], PDO::PARAM_INT);


			if($query -> execute()){
				return '<div class="alert alert-success" role="alert">Prestamo realizado<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
				
			}
			else{
				return "error";
			}
			$query -> close();	 
		}

		public function createModel(){
			try{
				$query = ConexionModel::conect()->prepare("
					SELECT book.libro_titulo, user.usuario_nombre, user.usuario_apellido, loan.prestamo_entrega, loan.prestamo_devolucion
					FROM   libro book,usuario user, prestamo loan
					WHERE  loan.usuario_dni = user.usuario_dni
					AND	   loan.libro_isbn = book.libro_isbn");

		        $query->execute();
		        $response = $query->fetchAll();
		        return $response;  
			}
			catch(PDOException $exception) {
			    return "Error: " . $exception->getMessage();
			}
		}
	}
?>
