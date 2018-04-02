<?php

	class Paginas extends Controller{

		public function __construct(){
		}
		/**
		 * Prueba
		 */
		public function index(){

			try{
				$this->vista('pages/Prueba',array("Message"=>"Controlador de paginas"));
			}catch(Exception $e){
				$error = 'Error message: '.$e->getMessage();
				die($error);
			}
		}
		/**
		 * Pruebas
		 */
		public function articulo(){
		}
		/**
		 * Pruebas
		 */
		public function actualizar(){
		}
	}
?>