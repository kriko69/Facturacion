
<div class="jumbotron col-lg-auto" style="margin-bottom:0px;">
    <h3 class="display-4">Bienvenido</h3>
    <p class="lead">Usuario: <?php echo $_SESSION['usuario']?>
        (<?php echo $_SESSION['tipo']?>)</p>  
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Xuxa's</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="../../controlador/usuarios/Usuarios_Controlador.php">Empleados<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../../controlador/productos/Productos_Controlador.php">Productos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../vista/factura/factura.php">Factura<span class="sr-only">(current)</span></a>
      </li>
        </ul>
        <a href="../../modelo/salir.php" ><button type="button" class="btn btn-danger">Cerrar Sesion</button></a>
    </div>
</nav>


<!--font awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">    <!-- Optional JavaScript -->
