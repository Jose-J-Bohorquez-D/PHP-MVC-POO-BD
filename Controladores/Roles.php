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

		/*
		// objeto 1
		$rol_1 = new Rol;
		$rol_1 -> setRolCode("1");
		echo "Codigo Rol: " . $rol_1 -> getRolCode();
		echo "<br>";
		$rol_1 -> setRolName("Jose Bohorquez");
		echo "Administrador: " . $rol_1 -> getRolName();
		echo "<br>";
		echo "<br>";
		
		// objeto 2
		$rol_2 = new Rol("2","Aaron Bohorquez");
		echo "Codigo Rol: " . $rol_2 -> getRolCode();
		echo "<br>";
		echo "Administrador: " . $rol_2 -> getRolName();
		echo "<br>";
		echo "<br>";

		// objeto 3
		$rol_3 = new Rol("3","Alejandra Sanchez");
		echo "Codigo Rol: " . $rol_3 -> getRolCode();
		echo "<br>";
		echo "Administrador: " . $rol_3 -> getRolName();
		*/

		# objeto 4 - contructor
		# objeto 5 - constructor
		# utilizar una estructura de repeticion para mostrar los objetos
		#vid 20231020 proyecto mvc users
		$rol = new Rol(
			null,
			"Customer"
		);
		#test para revisar datos
		#print_r($rol);
		$rol -> rolCreate();
	}


}

 ?>