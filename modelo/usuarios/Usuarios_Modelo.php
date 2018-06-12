<?php
        class Personas_modelo{
            private $db;
            private $personas;
            public function __construct(){
                require_once("../../modelo/Conectar.php");
                $this->db=Conectar::conexion();
                $this->personas=array();
            }
            public function get_personas(){
                $consulta=$this->db->query("Select * from usuario");
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->personas[]=$filas;

                }
                return $this->personas;

            }
            public function get_CARNET($car){
                $consulta=$this->db->query("Select * from usuario where carnet='$car'");
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->personas[]=$filas;

                }
                return $this->personas;

            }
            public function get_personasid($id){
                $consulta=$this->db->query("Select * from usuario WHERE id_usuario='$id'");
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->personas[]=$filas;

                }
                return $this->personas;

            }
        }
?>