<?php

	class Paginas extends Controller{

		public function __construct(){
		}
		/**
		 * Prueba
		 */
		public function index(){

			try{
				$this->vista('pages/Prueba',array("Message"=>"Controlador de paginas - Index"));
			}catch(Exception $e){
				$error = 'Error message: '.$e->getMessage();
				die($error);
			}
		}
		/**
		 * Prueba
		 */
		public function articulo(){
			try{
				$this->vista('pages/Prueba',array("Message"=>"Controlador de paginas - Articulo"));
			}catch(Exception $e){
				$error = 'Error message: '.$e->getMessage();
				die($error);
			}
		}
		/**
		 * Prueba
		 */
		public function actualizar(){
			try{
				$this->vista('pages/Prueba',array("Message"=>"Controlador de paginas - Actualizar"));
			}catch(Exception $e){
				$error = 'Error message: '.$e->getMessage();
				die($error);
			}
		}
	}
?>