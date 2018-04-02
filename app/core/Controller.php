<?php 
	
	/**
	* Controlador principal de la aplicacion PHP
	* Administra la cargas de los modelos y el llamado y carga de las vistas
	* de la aplicacion.
	*/
	class Controller{

		function __construct(){
			# code...
		}

		/**
		 * Carga un nuevo modelo de datos
		 * @param 	String	Nombre del modelo (No incluir extensión.php)
		 */
		public function modelo($modelo){
			$name = explode('.',$modelo);
			if(isset($name[1])){
				throw new InvalidArgumentException('Invalid Argument Exception: The model name should not include any extension');
			} else {
				$var = null;
				if(file_exists('../app/models/'.ucwords($modelo).'.php')){
					require_once '../app/models/'.ucwords($modelo).'.php';
					$var = new $modelo;
				} else {
					throw new Exception('Model file dosen\t exists');
				}
				return $var;
			}
		}

		/**
		 * Carga la vista correspondiente
		 * @param String $vista			Nombre del archivo de vista a cargar
		 * @param Array  $parametros	Array de parametros a cargar en la vista
		 */
		public function vista($vista,$parametros = []){
			$name = explode('.',$vista);
			if(isset($name[1])){
				throw new InvalidArgumentException('The view name should not include any extension');
			} else {
				if(file_exists('../app/views/'.$vista.'.php'))
					require_once '../app/views/'.$vista.'.php';
				else {
					throw new Exception('View file doesn\'t exists');
				}
			}
		}	
	}
?>