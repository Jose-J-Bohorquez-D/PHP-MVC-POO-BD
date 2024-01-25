<?php 

require_once("Modelos/DataBase.php");
#test database
#$db = DataBase::connection();

require_once("Controladores/Users.php");

$controlador = new Users();

$controlador -> createUser();

 ?>