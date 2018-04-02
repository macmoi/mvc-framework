<?php	
	//Autocarga de los ficheros de configuracion (Config files)
	spl_autoload_register(function($className){
		require_once 'config/'.$className.'.php';
	});
	//Autocarga de los ficheros nucleo (Core files)
	spl_autoload_register(function($className){
		require_once 'core/'.$className.'.php';
	});
?>