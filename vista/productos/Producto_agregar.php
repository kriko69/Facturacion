<?php
 include("../../modelo/cabecera.php");
?>
<!doctype html>
<html>
<!doctype html>
<html lang="en">
  <head>
    <title>Editar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>

<body>
 
<?php 
      include('../../modelo/navbar.php'); 
    ?>
    <div class="col-md-2"></div>
        <center><div class="col-md-8">
        <?php
        if(isset($_GET['nombre'])) //recibo el parametro del eliminar.php
        {
                if($_GET['nombre']=='0') //si es 1 hay un error
            {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                PRODUCTO YA REGISTRADO ANTERIORMENTE.
                </div>";
            }
        }
        ?>
            </div></center>
    <div class="row" style="margin-top:40px;">
        <div class="col-md-4 col-sm-12"></div>
        <div class="col-md-4 col-sm-12">
        <a href="../../controlador/productos/Productos_Controlador.php"><button type="button" class="btn btn-danger btn-block"><i class="far fa-arrow-alt-circle-left"></i> Regresar</button></a>
        <br>
        <br>
            <form action="../../modelo/productos/Producto_agregar.php" method="post">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nom"  placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" step="0.1" class="form-control" id="precio" name="pre"  placeholder="0.0">
                </div>               
                <?php
                  $txt='<div class="form-group">
                  <label>Tipo de Producto</label>
                  <select class="custom-select" name="tipo" id="tipo">';
                  $txt.= '<option selected>Pizza</option>' ;
                  $txt.= '<option>ALitas</option>';
                  $txt.= '<option>Refresco</option>';
                  $txt.='</select></div>';
                  echo $txt;
                ?>
                
                <button type="submit" class="btn btn-primary btn-block" name="update" id='update'>Agregar Datos</button>

</form>
<p>&nbsp;</p>
</body>
</html>