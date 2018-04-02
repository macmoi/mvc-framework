<?php
	//Requerimos archivo de configuracion
	require_once 'config/config.php';
	
	//Autocarga de los ficheros de configuracion (Config files)
	spl_autoload_register(function($className){
		require_once 'core/'.$className.'.php';
	});
?>