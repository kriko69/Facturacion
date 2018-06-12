<?php  
    include("../Conectar.php");
    $id=$_GET["id"];
    $nom=$_POST["nom"];
    $pre=$_POST["pre"];
    $tipo=$_POST["tipo"];
    $conexion=Conectar::conexion();
    $conexion->query("UPDATE producto SET nombre='$nom',precio='$pre', tipo='$tipo'  WHERE id_producto='$id' ");
    header("Location:../../controlador/productos/Productos_Controlador.php?modificar=0");



?>