<?php 
	require ("../crud/crud.php");

	$obj= new Crud();

	//$res = $bd->getConexion();



	//mostrar datos
	/*
	foreach ($resultado as $campo) 
	{
		//print_r($campo);
		# code...
		printf("<br>%s  %s",$campo["nombre"], $campo["apellido"]);
	}
	*/



	$datos=$obj->mostrarLibros();

	$tabla='<table class="table">
									<thead class="thead-dark">
										<tr class="font-weight-bold">
											<th>Titulo del Libro</td>
											<th>Fecha de Publicacion</td>
										</tr>
									</thead>
									<tbody>';
	$datosTabla="";

	foreach ($datos as $key => $value){
		$datosTabla=$datosTabla.'<tr>
								<td>'.$value['titulo'].'</td>
								<td>'.$value['fecha_pub'].'</td>
							
							</tr> ';
	}

	echo $tabla.$datosTabla.'</tbody></table>';




//printf("<br>%s =========> %s",$campo["titulo"], $campo["fecha_pub"]);



	//var_dump($resultado);

	 ?>

</body>
</html>

	



	
