<?php

    /**
     *  Esta clase modelo muestra la base de modelo empleados para la definicion de modelos
     * dentro de la aplicacion PHP una vez definida esta clase, cada modelo del sistema deberá heredar
     *  de esta clase para acceder a los metodos generales de manipulacion de datos hacia la base de datos
     */
    class Model{

        protected $tabla;

        /**
         * Constructor de la clase
         * @param string $table Nombre de la tabla de base de datos a manipular 
         */
        final public function __construct($table){
            $this->$tabla = $table;
        }
    }
?>