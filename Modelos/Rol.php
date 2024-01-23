<?php 

class Rol
{
	// ************************ 1ra Parte: (POO) ************************ //
	// Atributos 
		private $dbh;
		private $rolCode;
		private $rolName;
	// Metodos
	
	# Sobrecarga de contructores
		public function __construct()
		{
			try {
                $this->dbh = DataBase::connection();
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
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

	#aqui es que se hacen los casos de uso
			/*
				me explico si el usuario puede registrarse pues aca se hace la funcionalidad para que el usuario se registre, en este caso especifico, "el administrador podra crear roles para los usuarios"
			*/
		#caso de uso 09
	public function rolCreate()
	{
 		try {
            $sql = 'INSERT INTO ROLES VALUES (:rolCode,:rolName)';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('rolCode', $this->getRolCode());
            $stmt->bindValue('rolName', $this->getRolName());                
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}



}


 ?>