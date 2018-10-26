$(document).ready(function(){

	$(function () {
  		$('[data-toggle="tooltip"]').tooltip();
	});

	function validateLogin() {
		let expresion = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		if(!expresion.test($("#username-login").val()) || !expresion.test($("#password-login").val())){
			return false;
		}
		else{
			return true;
		}
	}
});