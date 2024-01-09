<?php 

class Rol
{
	// ************************ 1ra Parte: (POO) ************************ //
	// Atributos 
		private $rolCode;
		private $rolName;
	// Metodos
	
	# Sobrecarga de contructores
		public function __construct()
		{
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f = '__construct' . $i)) {
				call_user_func_array(array($this, $f), $a);
			}                
		}

		public function __construct2($rolCode,$rolName)
		{
			$this -> rolCode = $rolCode;
			$this -> rolName = $rolName;
		}

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
			public function setRolName($rolName)
			{
				$this -> rolName = $rolName;
			}

		#rolName: Get()
			public function getRolName()
			{
				return $this -> rolName;
			}

	// *************** 2da Parte: Persistencia BD (CRUD) ************** //
	public function rolCreate()
	{
		echo "hola mundo <br>";
	}



}


 ?>