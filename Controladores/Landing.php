<?php 

class Landing 
{

	public function __construct(){}

	public function main()
	{
		require_once("Vistas/Landing/Modulos/header.php");
		require_once("Vistas/Landing/Modulos/navSup.php");
		require_once("Vistas/Landing/Paginas/inicio.php");
		require_once("Vistas/Landing/Modulos/footer.php");
	}
}

 ?>