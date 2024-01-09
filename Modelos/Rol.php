<?php 

class Rol
{
	// ************************ 1ra Parte: (POO) ************************ //
	// Atributos 
		private $rolCode;
		private $rolName;
	// Metodos
	
	# Sobrecarga de contructores
		public function __construct(){}

	# Metodos Set() y Get()

		#rolCode: Set()
			public function setRolCode($rolCode)
			{
				$this -> rolCode = $rolCode;
			}

		#rolCode: Get()
			public function getRolCode()
			{
				return $this -> rolCode;
			}

		#rolName: Set()
		public function setRolName($rolCode)
		{
			$this -> rolCode = $rolCode;
		}

		#rolName: Get()
			public function getRolName()
			{
				return $this -> rolCode;
			}

	// *************** 2da Parte: Persistencia BD (CRUD) ************** //
	public function rolCreate()
	{
		echo "hola mundo <br>";
	}



}


 ?>