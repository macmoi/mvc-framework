<?php
	
	class Articulo extends Controller{
		
		function __construct(){
			echo 'Controlador de articulos <br><br>';
		}

		/**
		 * Prueba
		 * @return [type] [description]
		 */
		public function last($param){
			echo $param;
		}
	}
?>