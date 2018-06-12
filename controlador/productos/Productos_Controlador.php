<?php
    	require_once("../../modelo/productos/Productos_Modelo.php");
    	$productos=new Productos_modelo();
        $matrizproductos=$productos->get_productos();
    	require_once("../../vista/productos/Productos_Vista.php");
?>