<?php 

	require_once "../crud/crud.php";

	$datos = array(
	      'fecha' => $_POST['fecha'],
	      'correo' => $_POST['correo'],
	      'nombre'   => $_POST['nombre'],
	      'apellido'  => $_POST['apellido'],
	      'asunto'  => $_POST['asunto'],
	      'comentario'  => $_POST['comentario']
		);

	$registro=new Crud;
	
	echo $registro->insertarDatos($datos);

	//echo Crud::insertarDatos($datos);

 ?>
