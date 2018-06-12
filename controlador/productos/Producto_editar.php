<?php
		$id=$_GET["id"];
    	require_once("../../modelo/productos/Productos_Modelo.php");
    	$productos=new Productos_modelo();
		$matrizproductos=$productos->get_productosid($id);
		require_once("../../vista/productos/Producto_Vistaeditar.php");
?>