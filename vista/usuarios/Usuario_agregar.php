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
    <div class="col-md-2"></div>
        <center><div class="col-md-8">
    <?php
                if(isset($_GET['pass'])) //recibo el parametro del eliminar.php
                {
                        if($_GET['pass']=='1') //si es 1 hay un error
                    {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        PASSWORDS NO COINCIDEN.
                        </div>";
                    }
                }
                if(isset($_GET['carnet'])) //recibo el parametro del eliminar.php
                {
                        if($_GET['carnet']=='0') //si es 1 hay un error
                    {
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='margin-top:40px;'>
                        CARNET YA REGISTRADO ANTERIORMENTE.
                        </div>";
                    }
                }
            ?>
            </div></center>
    <div class="row" style="margin-top:40px;">
        <div class="col-md-4 col-sm-12"></div>
        <div class="col-md-4 col-sm-12">
        <a href="../../controlador/usuarios/Usuarios_Controlador.php"><button type="button" class="btn btn-danger btn-block"><i class="far fa-arrow-alt-circle-left"></i> Regresar</button></a>
        <br>
        <br>
            <form action="../../modelo/usuarios/Usuario_agregar.php" method="post">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nom"  placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="ape"  placeholder="Apellido">
                </div>
                <div class="form-group">
                    <label>Carnet</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="car" name="car"  placeholder="Carnet">
                        </div>
                        <?php
                          $txt='<div class="col-md-4">
                          <select class="custom-select" name="ciu" id="ciudad">';
                          $txt.= '<option selected>LP</option>';
                          $txt.=  '<option>CBBA</option>';
                          $txt.=  '<option>SCZ</option>';
                          $txt.= '<option>OR</option>';
                          $txt.=  '<option>PT</option>';
                          $txt.= '<option>CHQ</option>';
                          $txt.=   '<option>TRJ</option>';
                          $txt.='<option>PND</option>';
                          $txt.= '<option>BEN</option>';
                          $txt.='</select></div>';
                          echo $txt;
                        ?>
                    </div>
                </div>
                <?php
                  $txt='<div class="form-group">
                  <label>Tipo de Empleado</label>
                  <select class="custom-select" name="tipo" id="tipo">';
                  $txt.= '<option selected>Cajero</option>' ;
                  $txt.= '<option>Admin</option>';
                  $txt.='</select></div>';
                  echo $txt;
                ?>
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" id="pass1" name="pass1"  placeholder="Password">
                        <div class="input-group-append">
                            <button class="btn btn-outline-info" type="button" id="ver-pass1">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Repita Password</label>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" id="pass2" name="pass2"  placeholder="Repetir Password" >
                        <div class="input-group-append">
                            <button class="btn btn-outline-info" type="button" id="ver-pass2">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block" name="update" id='update'>Agregar Datos</button>

</form>
<p>&nbsp;</p>
</body>
</html>