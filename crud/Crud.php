<?php 
	
	require_Once "Conexion.php";

	class Crud extends Conexion{
		public function mostrarDatos(){
			$sql="SELECT id,
						fecha,
						correo,	
						nombre,
						apellido,
						asunto,
						comentario
				from contacto";
			$query=Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
		}

		public function insertarDatos($datos){
			$sql="INSERT into contacto (fecha,
										correo,	
										nombre,
										apellido,
										asunto,
										comentario)
				  values 			(:fecha,
									:correo,	
									:nombre,
									:apellido,
									:asunto,
									:comentario
				  					)";

			$query=Conexion::conectar()->prepare($sql);

			$query->bindParam(":fecha",$datos["fecha"], PDO::PARAM_STR);
			$query->bindParam(":correo",$datos["correo"], PDO::PARAM_STR);
			$query->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
			$query->bindParam(":apellido",$datos["apellido"], PDO::PARAM_STR);
			$query->bindParam(":asunto",$datos["asunto"], PDO::PARAM_STR);
			$query->bindParam(":comentario",$datos["comentario"], PDO::PARAM_STR);
			
			
			return $query->execute();	

			$query->close();
					
		}

		public function obtenerDatos($id){
			$sql="SELECT id,
						fecha,
						correo,	
						nombre,
						apellido,
						asunto,
						comentario
				from contacto where id=:id";
			$query=Conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);
			$query->execute();
			return $query->fetch();
			$query->close();

		}

		public function actualizarDatos($datos){
			$sql="UPDATE contacto set fecha = :fecha,
									correo = :correo,
									nombre = :nombre,
									apellido = :apellido,
									asunto = :asunto,
									comentario = :comentario
						where id=:id";
			$query=Conexion::conectar()->prepare($sql);

			$query->bindParam(":fecha",$datos["fecha"], PDO::PARAM_STR);
			$query->bindParam(":correo",$datos["correo"], PDO::PARAM_STR);
			$query->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
			$query->bindParam(":apellido",$datos["apellido"], PDO::PARAM_STR);
			$query->bindParam(":asunto",$datos["asunto"], PDO::PARAM_STR);
			$query->bindParam(":comentario",$datos["comentario"], PDO::PARAM_STR);

			$query->bindParam(":id", $datos["id"], PDO::PARAM_INT);

			return $query->execute();

			$query->close();

		}

		public function eliminarDatos($id){
			$sql="DELETE from contacto where id = :id";
			$query=conexion::conectar()->prepare($sql);
			$query->bindParam(":id", $id, PDO::PARAM_INT);

			return $query->execute();
			$query->close();

		}



		public function mostrarAutores(){
			$sql="SELECT id_autor,
						apellido,
						nombre
						
				from autores";
			$query=Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
		}

		public function mostrarLibros(){
			$sql="SELECT titulo,
						fecha_pub
						
						
				from titulos";
			$query=Conexion::conectar()->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			$query->close();
		}




		/*

		public function getTitulos (){
			$conexion = $this->conectar();
			if (is_object($conexion))
			{
				$sql = "SELECT * FROM titulos";
				$data = $conexion->query($sql);
			}
	
			return $data;

		}

		public function getAutores (){

			$conexion = $this->conectar();
			if (is_object($conexion))
			{
				$sql = "SELECT * FROM autores";
				$data = $conexion->query($sql);
			}
	
			return $data;
		}

		*/

	
		















	}


 ?>