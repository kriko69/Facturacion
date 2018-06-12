<?php  
    include("../Conectar.php");
    $id=$_GET["id"];
    $conexion=Conectar::conexion();
    $conexion->query("DELETE FROM producto WHERE id_producto='$id' ");
    header("Location:../../controlador/productos/Productos_Controlador.php?status=0");
?>