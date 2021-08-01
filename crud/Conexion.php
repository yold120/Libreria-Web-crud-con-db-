<?php 

	class Conexion{

		public function conectar(){
			# code...
			$servidor = "localhost";
			$baseDatos = "dblibreria";
			$usuario = "root";
			$clave = "";

			$conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $clave);
			return $conexion;
		}
	}

 ?>