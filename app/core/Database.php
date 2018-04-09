<?php

    class Database{

        private static $db_connection;
        private static $instancia;

        /**
         * Constructor
         * 
         * Crea automaticamente el objeto de conexion hacia la base de datos.
         * Los parametros de conexion de la BDD se encuentran configurados en el fichero config.php
         * ubicado en la ruta /app/config/config.php Modificar las constantes para un uso personalizado
         */
        private function __construct(){
            self::$db_connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            self::$db_connection->exec("SET CHARACTER SET utf8");
            self::$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        /**
         *  Retorna la instancia unica de la clase de conexion a BDD
         */
        public static function getInstance(){
            return (self::$instancia == null) ? self::$instancia = new self() : self
        }

        /**
         *  Retorna el objeto de conexion creado con el driver PDO
         */
        public function getConnection(){
            return self::$db_connection;
        }

        /**
         *  Cierra y destruye la conexion SQL
         */
        public function destroyConnection(){
            self::$db_connection = null;
        }
    }
?>