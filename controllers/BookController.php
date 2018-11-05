|<?php

	class BookController{
##insertar libro 
		public function store(){
			$request=array("isbn"          => $_POST["isbn"],
							"book-title"   => $_POST["book-title"],
							"cdu"          => $_POST["cdu"],
						   	"book-volumen" => $_POST["book-volumen"],
						    "book-edicion" => $_POST["book-edicion"],
						  	"book-year"    => $_POST["book-year"],
						  	"book-pag"	   => $_POST["book-pag"],
		                "book-description" => $_POST["book-description"],
		               "book-languaje"     => $_POST["book-languaje"],/*,
		               "select-editorial"  => $_POST["select-editorial"]*/
		           		"select-autors"       => $_POST["select-autors"]);												

			$response = BookModel::storeModel($request); 

		}

		public function create(){
			$response = BookModel::createModel(); 
			return $response;
		}

	}


?>