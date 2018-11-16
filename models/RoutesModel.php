<?php 
	
	class RoutesModel{
		public function route($request){
			if($request == "home"  ||
			   $request == "config"){
				$module = "views/modules/public/". $request .".php"	
			}
			else{
				$request = "index";
			}
			
		}
	}
?>
