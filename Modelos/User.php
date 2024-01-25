<?php 

class User
{
	// ************************ 1ra Parte: (POO) ************************ //
	// Atributos 
		private $dbh;
		protected $rolCode;
		protected $rolName;
		protected $userCode;
		protected $userName;
		protected $userLastName;
		protected $userEmail;
		protected $userPass;
		protected $userStatus;

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

		public function __construct8($rolCode,$rolName,$userCode,$userName,$userLastName,$userEmail,$userPass,$userStatus)
		{
			$this -> rolCode = $rolCode;
			$this -> rolName = $rolName;
			$this -> userCode = $userCode;
			$this -> userName = $userName;
			$this -> userLastName = $userLastName;
			$this -> userEmail = $userEmail;
			$this -> userPass = $userPass;
			$this -> userStatus = $userStatus;
		}

		public function __construct7($rolCode,$userCode,$userName,$userLastName,$userEmail,$userPass,$userStatus)
		{
			$this -> rolCode = $rolCode;
			$this -> userCode = $userCode;
			$this -> userName = $userName;
			$this -> userLastName = $userLastName;
			$this -> userEmail = $userEmail;
			$this -> userPass = $userPass;
			$this -> userStatus = $userStatus;
		}

		/*
		#constructor para el login donde se pide solo correo y pass
		public function __construct3($userCode,$userEmail,$userPass)
		{
			$this -> userCode = $userCode;
			$this -> userEmail = $userEmail;
			$this -> userPass = $userPass;
		}*/


		#constructor para el login donde se pide solo correo y pass
		public function __construct2($userEmail,$userPass)
		{
			$this -> userEmail = $userEmail;
			$this -> userPass = $userPass;
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

		#userCode: Set()
			public function setUserCode($userCode)
			{
				$this -> userCode = $userCode;
			}

		#userCode: Get()
			public function getUserCode()
			{
				return $this -> userCode;
			}

		#userName: Set()
			public function setUserName($userName)
			{
				$this -> userName = $userName;
			}

		#userName: Get()
			public function getUserName()
			{
				return $this -> userName;
			}

		#userLastName: Set()
			public function setUserLastName($userLastName)
			{
				$this -> userLastName = $userLastName;
			}

		#userLastName: Get()
			public function getUserLastName()
			{
				return $this -> userLastName;
			}

		#userEmail: Set()
			public function setUserEmail($userEmail)
			{
				$this -> userEmail = $userEmail;
			}

		#userEmail: Get()
			public function getUserEmail()
			{
				return $this -> userEmail;
			}

		#userPass: Set()
			public function setuserPass($userPass)
			{
				$this -> userPass = $userPass;
			}

		#userPass: Get()
			public function getUserPass()
			{
				return $this -> userPass;
			}

		#userStatus: Set()
			public function setUserStatus($userStatus)
			{
				$this -> userStatus = $userStatus;
			}

		#userStatus: Get()
			public function getUserStatus()
			{
				return $this -> userStatus;
			}

	// *************** 2da Parte: Persistencia BD (CRUD) ************** //
	public function userCreate()
	{
		try {
            $sql = 'INSERT INTO USUARIOS VALUES (:rolCode,:userCode,:userName,
            									 :userLastName,:userEmail,:userPass,:userStatus)';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('rolCode', $this->getRolCode());
            $stmt->bindValue('userCode', $this->getUserCode());           
            $stmt->bindValue('userName', $this->getUserName());
            $stmt->bindValue('userLastName', $this->getUserLastName());
            $stmt->bindValue('userEmail', $this->getUserEmail());
            $stmt->bindValue('userPass', $this->getUserPass());
            $stmt->bindValue('userStatus', $this->getUserStatus());                
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}



}


 ?>