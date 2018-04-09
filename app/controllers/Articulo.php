<?php
	
	class Articulo extends Controller{
		
		function __construct(){
		}

		public function index($param = null){
			echo '<div><p> Controlador de articulos, parametro = '.$param.'</p></div>';
		}

		/**
		 * Prueba
		 * @return [type] [description]
		 */
		public function last($param = null){
			echo $_GET['vista'];
			echo '<div><p> Articulos - last, parametro = '.$param.'</p></div>';
		}
	}
?>