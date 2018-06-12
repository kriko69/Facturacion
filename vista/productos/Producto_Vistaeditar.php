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
    <script>
        $(document).ready(function(){
            let ver1=true;
            $('#ver-pass1').click(function(){
                if(ver1)
                {
                    $('#pass1').attr('type','text');
                    ver1=!ver1;
                }else{
                    $('#pass1').attr('type','password');
                    ver1=!ver1;
                }
            });
            let ver2=true;
            $('#ver-pass2').click(function(){
                if(ver2)
                {
                    $('#pass2').attr('type','text');
                    ver2=!ver2;
                }else{
                    $('#pass2').attr('type','password');
                    ver2=!ver2;
                }
            });
            
        });
    </script>
  </head>

<body>
 
<?php 
      include('../../modelo/navbar.php'); 
    ?>
<?php
    foreach($matrizproductos as $producto):?>
    <div class="row" style="margin-top:40px;">
        <div class="col-md-4 col-sm-12"></div>
        <div class="col-md-4 col-sm-12">
        <a href="../../controlador/productos/Productos_Controlador.php"><button type="button" class="btn btn-danger btn-block"><i class="far fa-arrow-alt-circle-left"></i> Regresar</button></a>
        <br>
        <br>
            <form action="../../modelo/productos/Producto_modificar.php?id=<?php echo $producto['id_producto']?>" method="post">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nom"  placeholder="Nombre" value="<?php echo $producto['nombre'] ?>">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input type="number" step="0.1" class="form-control" id="precio" name="pre"  placeholder="" value="<?php echo $producto['precio'] ?>">
                </div>
                <?php
                $tipo=$producto['tipo'];
                  $txt='<div class="form-group">
                  <label>Tipo de Empleado</label>
                  <select class="custom-select" name="tipo" id="tipo">';
                  $txt.= (strcmp($tipo,'Pizza')==0) ? '<option selected>Pizza</option>' : '<option>Pizza</option>';
                  $txt.= (strcmp($tipo,'Alitas')==0) ? '<option selected>Alitas</option>' : '<option>Alitas</option>';
                  $txt.='</select></div>';
                  echo $txt;
                ?>                
                <button type="submit" class="btn btn-primary btn-block" name="update" id='update'>Actualizar Datos</button>

    <?php endforeach;?>
</form>
<p>&nbsp;</p>
</body>
</html>