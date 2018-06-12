<?php  
    include("../Conectar.php");
    $id=$_GET["id"];
    $conexion=Conectar::conexion();
    $conexion->query("DELETE FROM USUARIO WHERE id_usuario='$id' ");
    header("Location:../../controlador/usuarios/Usuarios_Controlador.php?status=0");
?>