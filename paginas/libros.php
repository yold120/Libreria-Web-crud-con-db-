<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libreria</title>
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="../css/estilos.css" rel="stylesheet" type="text/css">

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




</head>
<body>

    <?php
require("../encabezado.php");
?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-left">
                    
                    <div class="card-body ex1">
                        <div class="row">
                            <div class="col-sm-12">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12" >
                                
                                <div id="tablaDatos3"></div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <?php
require_once "../modalInsert.php";
?>
   <?php
require_once "../modalUpdate.php";
?>

    <script src="../librerias/bootstrap4/jquery-3.4.1.min.js"></script>
    <script src="../librerias/bootstrap4/popper.min.js"></script>
    <script src="../librerias/bootstrap4/bootstrap.min.js"></script>
    <script src="../librerias/sweetalert.min.js"></script>
    <script src="../js/crud.js"></script>


    <script type="text/javascript">
        mostrartabla3();

    </script>

</body>
</html>