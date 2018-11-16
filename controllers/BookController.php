|<?php

	class BookController{
##insertar libro 
		public function store(){
			if(isset($_POST["save-book"])){
			$request=array("isbn"          => $_POST["isbn"],
							"book-title"   => $_POST["book-title"],
							"select-tema"  => $_POST["select-tema"],
						   	"book-volumen" => $_POST["book-volumen"],
						    "book-edicion" => $_POST["book-edicion"],
						  	"book-year"    => $_POST["book-year"],
						  	"book-pag"	   => $_POST["book-pag"],
		                "book-description" => $_POST["book-description"],
		               "book-languaje"     => $_POST["book-languaje"],
		               "select-editorial"  => $_POST["select-editorial"],
		           		"select-autors"       => $_POST["select-autors"]);												

			$response = BookModel::storeModel($request);
					if ($response=="success") {
						header("location:index.php?action=ok");
					}
			} 
		}

		public function create(){
			$response = BookModel::createModel(); 
			return $response;
		}


		public function search(){
			if(isset($_POST["search"])){
			$request=array("book-title" =>$_POST["book-title"]);

			$response=BookModel::searchBookModel($request); 

			return $response;
		}
		}

	}


?>