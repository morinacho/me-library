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

				/*
			echo 		  " isbn \n".$_POST["isbn"].
					" book-title\n ". $_POST["book-title"].
					" cdu\n "       . $_POST["cdu"].
			   	  " book-volumen \n". $_POST["book-volumen"].
			       " book-edicion\n". $_POST["book-edicion"].
				  	" book-year \n" . $_POST["book-year"].
				  	  " book-pag \n". $_POST["book-pag"].
			"book-description\n" .$_POST["book-description"].
				"book-languaje\n" .$_POST["book-languaje"];
			 
			
		*/
		}

	}


?>