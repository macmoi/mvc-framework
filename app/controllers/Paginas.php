<?php

	class Paginas extends Controller{

		public function __construct(){
		}
		/**
		 * Prueba
		 */
		public function index($param){

			try{
				$this->vista('pages/Prueba',array("Message"=>"Controlador de paginas - Index","Variable"=>$param));
			}catch(Exception $e){
				$error = 'Error message: '.$e->getMessage();
				die($error);
			}
		}
		/**
		 * Prueba
		 */
		public function articulo($param){
			try{
				$this->vista('pages/Prueba',array("Message"=>"Controlador de paginas - Articulo","Variable"=>$param));
			}catch(Exception $e){
				$error = 'Error message: '.$e->getMessage();
				die($error);
			}
		}
		/**
		 * Prueba
		 */
		public function actualizar($param){
			try{
				$this->vista('pages/Prueba',array("Message"=>"Controlador de paginas - Actualizar","Variable"=>$param));
			}catch(Exception $e){
				$error = 'Error message: '.$e->getMessage();
				die($error);
			}
		}
	}
?>