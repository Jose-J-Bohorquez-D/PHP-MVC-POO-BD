<?php
/*
    class DataBase{       
    
        public static function connection(){            
            $hostname = "dbappwebcompras.mysql.database.azure.com";
            $port = "3306";
            $database = "db_appwebphp";
            $username = "adminproject";
            $password = "HolaMundo147@";
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA => 'assets/db/DigiCertGlobalRootCA.crt.pem'
            );
			$pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password,$options);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}*/
     class DataBase{       
    
         public static function connection(){            
             $hostname = "localhost";
             $port = "3306";
             $database = "appwebphp";
             $username = "root";
             $password = "";
             try {
                $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                # test de conexión
                #echo "conexion exitosa a base de datos: $database";
                return $pdo;
             } catch (Exception $e) {
                 echo "error de conexión";
             }
	 		
	 	}
	 }
?>