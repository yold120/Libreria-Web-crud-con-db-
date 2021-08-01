<?php 

	require_once "../crud/crud.php";
	$obj= new Crud();
	
	$datos=$obj->mostrarDatos();

	$tabla='<table class="table table-dark">
									<thead>
										<tr class="font-weight-bold">
											<td>Fecha</td>
											<td>Correo</td>
											<td>Nombre</td>
											<td>Apellido</td>
											<td>Asunto</td>
											<td>Comentario</td>
											<td>Editar</td>
											<td>Eliminar</td>
										</tr>
									</thead>
									<tbody>';
	$datosTabla="";

	foreach ($datos as $key => $value){
		$datosTabla=$datosTabla.'<tr>
								<td>'.$value['fecha'].'</td>
								<td>'.$value['correo'].'</td>
								<td>'.$value['nombre'].'</td>
								<td>'.$value['apellido'].'</td>
								<td>'.$value['asunto'].'</td>
								<td>'.$value['comentario'].'</td>
								<td>
									<span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id'].')" data-toggle="modal" data-target="#actualizarModal">
										<i class="fas fa-edit"></i>
									</span>
												
								</td>
								<td>
									<span class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['id'].')">
										<li class="fas fa-trash-alt"></li>
									</span>
								</td>
							</tr> ';
	}

	echo $tabla.$datosTabla.'</tbody></table>';

 ?>