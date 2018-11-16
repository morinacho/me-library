<?php
require_once "ConexionModel.php";
Class TemaModel{
		
		public function createModel(){
			try{
				$query = ConexionModel::conect()->prepare("SELECT tema_cdu, tema_nombre 
														   FROM tema 
														   ORDER BY tema_cdu");			 
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