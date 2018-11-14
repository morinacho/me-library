<?php
Class TemaController{

		public function create(){
					$response = TemaModel::createModel(); 
					return $response;
				}
	}
		?>