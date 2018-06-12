<?php
    session_start();
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['tipo'])) //si no hay dats en $_SESSION[úsuario]
    {
        header('Location:../../login/login.php');
    }
    else{
      if($_SESSION['tipo']=='c'){
        $_SESSION['tipo']="cajero";
      }else{
        if($_SESSION['tipo']=='a'){
            $_SESSION['tipo']="administrador";
        }
      }
    }
    // setcookie('empleado',$_SESSION['usuario'],time()+86400,'/Facturacion/administrador');
    // setcookie('tipo',$_SESSION['tipo'],time()+86400,'/Facturacion/administrador');         
                
?>