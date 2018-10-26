<?php
##create editorial
	class EditorialController{
		#insertar editorial
		public function store (){
			

			

			$request=array("editorial-name"    => $_POST["editorial-name"],

						   "editorial-address" => $_POST["editorial-address"]);
						  	 
			$response = EditorialModel::storeModel($request); 

			if ($response){
				echo "Datos guardados";
			}
			else{
				echo "error";
			}		
		}

#ver editoriales
		public function create(){
			$response = EditorialModel::createModel("editorial"); 
			
			/*foreach ($response as $row => $item) {
	
			echo'<tr>
				<td>'.$item["editorial-name"].'</td></tr>';

*/
				foreach ($response as $value) {
					# code...
				print_r("  ");
				print_r($value);
				print_r("    ");
				
				}
				unset($value)	;		
			
		}
	}

?>