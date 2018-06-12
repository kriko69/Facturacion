<?php
        class Productos_modelo{
            private $db;
            private $productos;
            public function __construct(){
                require_once("../../modelo/Conectar.php");
                $this->db=Conectar::conexion();
                $this->productos=array();
            }
            public function get_productos(){
                $consulta=$this->db->query("Select * from producto");
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->productos[]=$filas;

                }
                return $this->productos;

            }
            public function get_productosid($id){
                $consulta=$this->db->query("Select * from producto WHERE id_producto='$id'");
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->productos[]=$filas;

                }
                return $this->productos;

            }
            public function get_NAME($nom){
                $consulta=$this->db->query("Select * from producto where nombre='$nom'");
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->productos[]=$filas;

                }
                return $this->productos;

            }
        }
?>