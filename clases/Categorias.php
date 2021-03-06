<?php
require_once "Conexion.php";

class Categorias extends Conexion{
    public function agregarCategorias($datos)
    {
        $conexion = Conexion::conectar();
        $sql ="INSERT INTO t_categoria(nombreCategoria,descripcionCategoria) VALUES (?,?)";
        $query=$conexion->prepare($sql);
        $query->bind_param('ss',$datos['nombre'],
                                $datos['descripcion']);
        $respuesta=$query->execute();
        
        return $respuesta;
    }
    public function eliminarCategoria($idCategoria)
    {
        $conexion = Conexion::conectar();
        $sql ="DELETE FROM t_categoria WHERE id_categoria=?";
        $query=$conexion->prepare($sql);
        $query->bind_param('i',$idCategoria);
        $respuesta=$query->execute();
        
        return $respuesta;
    }
    public function obtenerDatosCategoria($idCategoria)
    {
        $conexion = Conexion::conectar();
        $sql="SELECT id_categoria,nombreCategoria,descripcionCategoria FROM t_categoria WHERE id_categoria='$idCategoria'";
        $resultado= mysqli_query($conexion,$sql);
        $categoria= mysqli_fetch_array($resultado);

        $datos=array("idCategoria"=>$categoria['id_categoria'],
                    "nombre"=>$categoria['nombreCategoria'],
                    "descripcion"=>$categoria['descripcionCategoria']);
        return $datos;
    }
    public function actualizarCategoria($datos)
    {
    $conexion=Conexion::conectar();
    $sql ="UPDATE t_categoria SET  nombreCategoria= ?,
                              descripcionCategoria= ? 
                                WHERE id_categoria= ?";
    $query = $conexion->prepare($sql);
    $query -> bind_param('ssi',$datos['nombre'],
                             $datos['descripcion'],
                             $datos['idcategoria']);
     $respuesta=$query->execute();
     
     return $respuesta;
    }

}
?>