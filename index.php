<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Libreria</title>
	<link rel="icon" type="image/png" href="Imagenes/logo.png" />
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">

	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




</head>
<body>

		<?php 
		require ("./encabezado.php");
	 ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12" >

									<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../Imagenes/libros.jpg" alt="First slide" height="350">

      <div class="carousel-caption d-none d-md-block">
    <h1 class="ex2">LOS MEJORES LIBROS</h1>
    <a href="/paginas/libros.php">  <p class="ex3"> Ir Aqui</p>
   </a>
  </div>
    </div>

    <div class="carousel-item">

      <img class="d-block w-100" src="../Imagenes/libros2.jpg" alt="Second slide" height="350">

       <div class="carousel-caption d-none d-md-block">
    <h1 class="ex2">SOLICITALOS</h1>
    

    	<a href="#"> 
    			<p class="ex3"> </p>
            	<span  class="ex3" data-toggle="modal" data-target="#insertarModal">Ir Aqui
				</a>	</span>
 	 </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Imagenes/autores2.jpg" alt="Third slide" height="350">

       <div class="carousel-caption d-none d-md-block">
    <h1 class="ex2">AUTORES RECONOCIDOS</h1>
<a href="/paginas/autores.php">  <p class="ex3"> Ir Aqui</p>
   </a>  </div>
    </div>


<div class="carousel-item">

      <img class="d-block w-100" src="../Imagenes/contacto.jpg" alt="Second slide" height="350">

       <div class="carousel-caption d-none d-md-block">
    <h1 class="ex2">CONTACTENOS</h1>
    

    	<a href="#"> 
    			<p class="ex3"> </p>
            	<span  class="ex3" data-toggle="modal" data-target="#insertarModal">Ir Aqui
				</a>	</span>
 	 </div>

    </div>


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>





								
								<div id="tablaDatos1"></div>
	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<?php require_once "modalInsert.php" ?>
	<?php require_once "modalUpdate.php" ?>

	<script src="librerias/bootstrap4/jquery-3.4.1.min.js"></script>
	<script src="librerias/bootstrap4/popper.min.js"></script>
	<script src="librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="librerias/sweetalert.min.js"></script>
	<script src="js/crud.js"></script>


	<script type="text/javascript">
		//mostrartabla1();

	</script>









</body>
</html>