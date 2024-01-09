<?php 

require_once("Modelos/Rol.php");

class Roles
{

	

	public function main()
	{
		echo "Accion main() del contrtolador Roles ";
	}

	public function createRol()
	{
		$rol = new Rol;
		$rol -> setRolCode("abc-123");
		echo "Codigo Rol: " . $rol -> getRolCode();
		echo "<br>";
		$rol -> setRolName("Jose Bohorquez");
		echo "Administrador: " . $rol -> getRolName();
	}
}

 ?>