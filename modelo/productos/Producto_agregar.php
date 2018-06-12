<?php  
    include("../Conectar.php");
    $nom=$_POST["nom"];
    $pre=$_POST["pre"];
    $tipo=$_POST["tipo"];

    require_once("Productos_Modelo.php");
         $personas=new Productos_modelo();
         $matrizpersonas=$personas->get_NAME($nom);
        $control=0;
        foreach($matrizpersonas as $line){
            if($line["id_producto"]>0)
                {
                    $control=1;
                }
        }
        if($control == 0 ){
            $conexion=Conectar::conexion();
            $sql='insert into producto(nombre,precio,tipo) values (?,?,?)';
            $resultado=$conexion->prepare($sql);
            $resultado->execute(array($nom,$pre,$tipo));
            header("Location:../../controlador/productos/Productos_Controlador.php?agregar=1");}
    else{
    header("Location:../../vista/productos/Producto_agregar.php?nombre=0");}


    

?>