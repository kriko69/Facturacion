<?php  
    include("../Conectar.php");
    $nom=$_POST["nom"];
    $ape=$_POST["ape"];
    $ciu=$_POST["ciu"];
    $car=$_POST["car"];
    $pass=$_POST["pass1"];
    $pass2=$_POST["pass2"];
    $tipo=$_POST["tipo"];
    if($pass==$pass2)
    {
         require_once("Usuarios_Modelo.php");
         $personas=new Personas_modelo();
         $matrizpersonas=$personas->get_CARNET($car);
         $control=0;
        foreach($matrizpersonas as $line){
            if($line["id_usuario"]>0)
                {
                    $control=1;
                }
        }
        if($control == 0 ){
            $conexion=Conectar::conexion();
            $sql='insert into usuario(nombre,apellido,carnet,ciudad,tipo,pass) values (?,?,?,?,?,?)';
            $resultado=$conexion->prepare($sql);
            $resultado->execute(array($nom,$ape,$car,$ciu,$tipo,$pass));
            header("Location:../../controlador/usuarios/Usuarios_Controlador.php?agregar=1");
        }
        else{
            header("Location:../../vista/usuarios/Usuario_agregar.php?carnet=0");
        }
    }
    else{
        header("Location:../../vista/usuarios/Usuario_agregar.php?pass=1");
    }

?>