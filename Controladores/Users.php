<?php 

require_once("Modelos/User.php");

class Users
{
	public function __construct(){}

	#crear usuario	
	public function createUser()
	{
		// objeto 1
		$user = new User(
			"1",
			"bdjj2355",
			"jose",
			"bohorquez",
			"bd@gmail.com",
			"abc123",
			1
		);

		print_r($user);
		echo("<br>");
		echo("<br>");

		// objeto 2 ejemplo inicio de sesion
		$user_2 = new User(
			"bd@gmail.com",
			sha1("54321")
		);
		print_r($user_2);

		echo("<br>");
		echo("<br>");

		// objeto 2 ejemplo inicio de sesion
		$user_3 = new User(
			"puto_50",
			"bd@gmail.com",
			sha1("54321")
		);
		print_r($user_3);

	}

	#listar usuario
	public function readUser(){}

	#actualizar usuario	
	public function updateUser(){}

	#eliminar usuario
	public function delUser(){}
}


 ?>