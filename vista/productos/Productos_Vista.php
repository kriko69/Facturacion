<?php
 include("../../modelo/cabecera.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Listar</title>
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

    <div class="row" style="margin-top:40px;">
        <div class="col-md-2"></div>
        <div class="col-md-2">
        <a href="../../vista/productos/Producto_agregar.php"><button type="button" class="btn btn-outline-success btn-block">Agregar Producto <i class="fas fa-utensils"></i></button></a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
                if(isset($_GET['status'])) //recibo el parametro del eliminar.php
                {
                    if($_GET['status']=='0') //si es 0 es correcto
                    {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        EL PRODUCTO SE ELIMINO CORRECTAMENTE.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }else{
                        if($_GET['status']=='1') //si es 1 hay un error
                    {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        ERROR AL ELIMINAR EL PRODUCTO.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }
                    }
                }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
                if(isset($_GET['modificar'])) //recibo el parametro del eliminar.php
                {
                    if($_GET['modificar']=='0') //si es 0 es correcto
                    {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        EL PRODUCTO SE MODIFICO CORRECTAMENTE.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }else{
                        if($_GET['modificar']=='1') //si es 1 hay un error
                    {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        ERROR AL MODIFICAR EL PRODUCTO.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }
                    }
                }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
                if(isset($_GET['agregar'])) //recibo el parametro del eliminar.php
                {
                    if($_GET['agregar']=='1') //si es 0 es correcto
                    {
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        EL PRODUCTO SE AGREGO CORRECTAMENTE.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }else{
                        if($_GET['agregar']=='0') //si es 1 hay un error
                    {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        ERROR AL AGRERGAR EL PRODUCTO.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                        </div>";
                    }
                    }
                }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>


    <div class="row" style="margin-top:40px;">
        <div class="col-sm-12 col-md-2"></div>
        <div class="col-sm-12 col-md-8">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Tipo</th>
                        <th class="text-center" colspan="2">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $cont=0;
    foreach($matrizproductos as $producto):$cont=$cont+1;?>
    <tr>
      <td width="5%"><?php echo $cont;?></td>
      <td width="15%"><?php echo $producto["nombre"]?></td>
      <td width="15%"><?php echo $producto["precio"]?></td>
      <td width="15%"><?php echo $producto["tipo"]?></td>
 
      <td class="bot" width="15%"><a href="../../modelo/productos/Producto_eliminar.php?id=<?php echo $producto['id_producto']?> "><button type='button' class='btn btn-danger btn-outline-danger' >Eliminar <i class='fas fa-trash-alt'></i></button></a></td><td width="15%"><a href="../../controlador/productos/Producto_editar.php?id=<?php echo $producto['id_producto']?> "><button type='button' class='btn btn-primary btn-outline-primary' >Editar <i class='fas fa-user-edit'></i></button></a></td>
    </tr>       
    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-2"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


