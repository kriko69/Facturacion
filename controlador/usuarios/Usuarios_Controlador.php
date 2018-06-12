<?php
    	require_once("../../modelo/usuarios/Usuarios_Modelo.php");
    	$personas=new Personas_modelo();
		$matrizpersonas=$personas->get_personas();
    	require_once("../../vista/usuarios/Usuarios_Vista.php");
?>