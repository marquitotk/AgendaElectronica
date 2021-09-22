<?php

class Conexion{

public function conectar(){
    $servidor="localhost";
    $usuario="root";
    $password="12345678";
    $bd="bd_agendacontactos";
    $conexion=mysqli_connect($servidor,$usuario,$password,$bd);
    return $conexion;
    }
}
?>