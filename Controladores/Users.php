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
			"2355",
			"jose",
			"bohorquez",
			"bd@gmail.com",
			"abc123",
			1
		);
		#$user -> userCreate();

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
		// objeto  ejemplo 2 registro de usuario
		$user_04 = new User(
			"3",
			"01234",
			"carlos",
			"gomez",
			"cg@gmail.com",
			"0123456789",
			2
		);
		$user_04 -> userCreate();

	}

	#listar usuario
	public function readUser(){}

	#actualizar usuario	
	public function updateUser(){}

	#eliminar usuario
	public function delUser(){}
}


 ?>