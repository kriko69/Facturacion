<?php
		$id=$_GET["id"];
    	require_once("../../modelo/usuarios/Usuarios_Modelo.php");
    	$personas=new Personas_modelo();
        $matrizpersonas=$personas->get_personasid($id);
    	require_once("../../vista/usuarios/Usuario_Vistaeditar.php");
?>