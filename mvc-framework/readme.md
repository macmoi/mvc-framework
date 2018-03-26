# MVC pseudo-framework PHP #
____________________________________

	Este psudo framework se desarrolla para estructurar mejor los códigos de desarrollo
	de proyectos personales realizados, separando la lógica de sistema de la lógica de negocios.

	Siguiendo una fuerte influencia del modelo empleado por Codeinighter y Laravel.

	Descripcion de la estructura

```Java

	 mvc/
	   	|
	   	|____app/
	   	|	  	|___config/				Archivos de configuracion de proyecto
	   	|	  	|___controllers/		Clases controladoras
	   	|	  	|___core/				Clases base del sistema (BDD, Controlador, Modelo, Nucleo)
	   	|	  	|___helpers/			Clases de ayuda (Formateadores URL, QueryBuilders, etc...)
	   	|	  	|___models/				Clases Modelo a BDD
	   	|	  	|___views/				Clases de la vista (Renderizado de la vista)
	   	|		|		 |___includes/	Archivos HTML comunes de vistas (Footer, Header, Scripts, etc...)
	   	|	  	|___starter.php			Iniciador (Comunicador de parametros hacia las vistas HTML)
	   	|
	   	|_public/
	   	|		|___css/				Archivos CSS
	   	|		|___img/				Archivos de imágenes del sistema
	   	|		|___js/					Archivos Javascript del frontend
	   	|		|___index.php			Enrutador inicial del sistema
	   	|END
```	

