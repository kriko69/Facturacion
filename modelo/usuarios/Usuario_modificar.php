<?php  
    include("../Conectar.php");
    $id=$_GET["id"];
    $usuario=$_GET['nombre'];
    $nom=$_POST["nom"];
    $ape=$_POST["ape"];
    $ciu=$_POST["ciu"];
    $car=$_POST["car"];
    $pass=$_POST["pass1"];
    $pass2=$_POST["pass2"];
    $tipo=$_POST["tipo"];
    if($pass==$pass2){
        session_start();
        if(strtolower($usuario)===strtolower($_SESSION['usuario'])){
            $_SESSION['usuario']=$nom;
            $_SESSION['tipo']=$tipo;
        }
        $conexion=Conectar::conexion();
        $conexion->query("UPDATE usuario SET nombre='$nom', apellido='$ape', tipo='$tipo',ciudad='$ciu', carnet='$car',pass='$pass'  WHERE id_usuario='$id' ");
        header("Location:../../controlador/usuarios/Usuarios_Controlador.php?modificar=0");
    }
    else{
        header("Location:../../controlador/usuarios/Usuario_editar.php?pass=1&id=".$id);
    }



?>