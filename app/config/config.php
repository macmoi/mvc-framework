<?php

    /**
     * Archivo de configuracion y definicion de constantes generales
     * de la aplicacion php. Cualquier configuracion necesaria para el funcionamiento
     * y adecuación de un proyecto a la logica de negocio debe realizarse mediante este archivo.
     */

    //CONFIGURACIONES DE LA APLICACION
    define('APP_PATH',dirname(dirname(__FILE__)));              // Ruta principal de los archivos de aplicacion
    define('ROOT_PATH','/projects/github/mvc/mvc-framework/');  // URL principal del sitio web (Se configura)
    define('SITE_NAME','_SITENAME_');                           // Nombre del sitio web (Se configura)

    //CONFIGURACIONES DE BASE DE DATOS
    define('DB_HOST','localhost');                              // Host de bdd
    define('DB_USER','root');                                   // Usuario de acceso
    define('DB_PASS','123456789');                                // Contraseña de acceso
    define('DB_NAME','dbname');                                 // Nombre de BDD
?>