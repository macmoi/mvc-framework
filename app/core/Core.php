<?php
	
	/**
	*	Esta clase mapea la url enviada en una petición, extrayendo los parametros
	*	para la identificacion del controlador, metodo y parametros necesarios para efectuar
	*	y procesar las instrucciones correspondientes a la acción requerida.
	*
	* 	Ejemplo de URL a captar: http://localhost/controller/method/parameters...
	* 	ejemplificación real: http://localhost/posts/mostrar/af2362
	*  
	*/
	class Core{
		
		//Estas variables determinan los controladores y metodos predeterminados para cuando no se envian parametros
		
		protected $controladorActual = 'paginas';
		protected $metodoActual = 'index';
		protected $parametros = [];

		function __construct(){
			$this->getURL();	
		}

		/**
		 * Retorna la URL a la que se envía la petcion HTTP.
		 * @return (array) Url de la peticion
		 */
		public function getURL(){

			$url = $_SERVER['REQUEST_URI'];
			$url = filter_var($url,FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
?>