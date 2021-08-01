function mostrartabla1(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos1').html(r);
		}
	});
}

function mostrartabla2(){
	$.ajax({
		type:"POST",
		url:"../procesos/mostrarAutores.php",
		success:function(r){
			$('#tablaDatos2').html(r);
		}
	});
}
function mostrartabla3(){
	$.ajax({
		type:"POST",
		url:"../procesos/mostrarLibros.php",
		success:function(r){
			$('#tablaDatos3').html(r);
		}
	});
}

function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/obtenerDatos.php",
		success:function(r){
			r=jQuery.parseJSON(r);

			$('#id').val(r['id']);
			$('#fechau').val(r['fecha']);
			$('#correou').val(r['correo']);
			$('#nombreu').val(r['nombre']);
			$('#apellidou').val(r['apellido']);
			$('#asuntou').val(r['asunto']);
			$('#comentariou').val(r['comentario']);
		}

	});

}

function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertu').serialize(),
		success:function(r){

			if(r==1){
				mostrar();
				swal("Actualizado con exito!", ":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
			
		}
	});

}

function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"procesos/eliminarDatos.php",
				data:"id=" + id,
				success:function(r){

					if(r==1){
						mostrar();
						swal("Eliminado con exito!", ":D","info");
					}else{
						swal("¡Error!",":(","error");
					}
					
				}
			});
		} 
	});
}

function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){

			if(r==1){
				$('#frminsert')[0].reset();//limpiar formulario
				mostrar();
				swal("¡Agregado con exito!", ":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
			
		}
	});

	return false;
}