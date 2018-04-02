<?php
	
	/**
	*	Esta clase mapea la url enviada en una petición, extrayendo los parametros
	*	para la identificacion del controlador, metodo y parametros necesarios para efectuar
	*	y procesar las instrucciones correspondientes a la acción requerida.
	*
	* 	Ejemplo de URL a captar: http://localhost/controller/method/parameters...
	* 	ejemplificación real: http://localhost/posts/mostrar/af2362
	*/
	class Core{
		
		//Estas variables determinan los controladores y metodos predeterminados para cuando no se envian parametros
		
		protected $controladorActual = 'Paginas';
		protected $metodoActual = 'index';
		protected $parametros = [];

		/**
		 * 	Constructor
		 * 	Verifica, controla y procesa la inclusión de los archivos controladores
		 * 	del framework. Por defecto se aplica el controlador "Paginas" por defecto
		 * 	pudiendo ser cambiado en las variables de arriba, por cualquier otro de su 
		 * 	preferencia
		 */
		function __construct(){
			$url = $this->getURL();

			//Si existe
			if(isset($url[5])){
				if(file_exists('../app/controllers/'.ucwords($url[5]).'.php')){
					$this->controladorActual = ucwords($url[5]);
					unset($url[5]);
				}	
			}

			//Instancia de controlador
			require_once '../app/controllers/'.$this->controladorActual.'.php';
			$this->controladorActual = new $this->controladorActual;

			//Verificacion de la existencia del metodo solicitado en el controlador
			if(isset($url[6])){
				if(method_exists($this->controladorActual, $url[6])){
					$this->metodoActual = $url[6];
					unset($url[6]);
				}
			}

			//extraemos los parametros de la URL (Si no hay parametros se recibe un array vacio "Valido para el metodo POST")
			$this->parametros = $url ? array_values($url) : [];			
			
			//Config la clase del controlador, el metodo y los parametros. Y se ejecuta el metodo
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
		}

		/**
		 * Retorna la URL a la que se envía la petcion HTTP.
		 * @return array Url de la peticion
		 */
		public function getURL(){

			$url = $_SERVER['REQUEST_URI'];
			$url = rtrim($url);
			$url = filter_var($url,FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			//Solo en desarrollo (En produccion debe manejarse la URL directamente sin modificaciones)
			for ($i=0; $i < 5 ; $i++) { 
				unset($url[$i]);
			}
			return $url;
		}
	}
?>