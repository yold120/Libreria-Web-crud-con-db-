<?php 
	require_once "../crud/crud.php";
	$id=$_POST['id'];

	$obj = new crud();
	echo json_encode($obj->obtenerDatos($_POST['id']));

	//echo json_encode(Crud::obtenerDatos($id));
 ?>