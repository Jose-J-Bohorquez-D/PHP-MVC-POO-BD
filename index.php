<?php 

require_once("Modelos/DataBase.php");
#test database
#$db = DataBase::connection();

require_once("Controladores/Roles.php");

$controlador = new Roles();

$controlador -> createRol();

 ?>