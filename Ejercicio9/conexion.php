<?php
	class Conexion extends PDO{
		private $host = "localhost";
		private $base = "mibasejorgerosa";
		private $usuario = "examen324";
		private $clave = "123456";
		
		public function __construct()
		{
			try
			{
				parent::__construct('mysql:host='.$this->host.';dbname='.$this->base.';charset=utf8', $this->usuario,$this->clave, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			}
			catch(PDOException $e)
			{
				echo "Error: ".$e->getMessage();
				exit;
			}
		 }
	}


?>


