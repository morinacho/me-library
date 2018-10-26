$(document).ready(function(){
	//Agregando elementos a la tabla de autores
	$("#add-autor").click(function(){
		nombre    = $("#autor-add").val();
		tipoAutor = $("#autor-tipo").val();

		if (nombre != null && tipoAutor != null){
			nombre = nombre.split(" ");
			cantRow = $("#list-autors tr").length;
			row = '<tr><th scope="row">'+ cantRow +'</th><td>' + nombre[0] +'</td><td>'+ nombre[1] +'</td><td>'+ tipoAutor +'</td></tr>'
			$("#tbody").append(row);
		}
		else{
			alert("Campos vacio");
		}
		
	});

	//Control de imagenes
	$("#user-img").change(function( ) {
		image = this.files[0];

		//Control de tamaño de imagen
		if (Number(image.size) < 2000000){
			//Control de tipo de imagen
			if (image.type == "image/jpeg" || image.type == "image/png"){
				let datos = new FormData();
				$datos.append("imagen", image);
				$.ajax({
					url        :"",
					method     : "POST",
					data       : datos,
					cache      : false,
					contentType: false,
					processData: false,
					beforeSend : function(){

					},
					success    : function($response){
						 
					}
				});

			}
			else{
				alert("Tipo de archivo no valido");
			}
		}
		else{
			alert("Imagen demasiado grande");
		}
	});

	/*
	 * Enviando a travez de AJAX
	 */
 	//
	

});