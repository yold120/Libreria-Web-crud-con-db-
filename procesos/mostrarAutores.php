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

	$datos=$obj->mostrarAutores();

	$tabla='<table class="table">
									<thead>
										<thead class="thead-dark">
											<th>Nombre</td>
											<th>Apellido</td>
										</tr>
									</thead>
									<tbody>';
	$datosTabla="";

	foreach ($datos as $key => $value){
		$datosTabla=$datosTabla.'<tr>
								<td>'.$value['nombre'].'</td>
								<td>'.$value['apellido'].'</td>
							
							</tr> ';
	}

	echo $tabla.$datosTabla.'</tbody></table>';







	//var_dump($resultado);

	 ?>

</body>
</html>

	