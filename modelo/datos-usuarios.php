<?php

class Usuarios
{
    function viewUsuario($id_usuario)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $consulta = "SELECT
                     id_usuario,
                     identificacion,
                     nombres,
                     apellidos,
                     usuario,
                     contrasena,
                     email,
                     telefono,
                     rol,
                     estado,
                     departamento,
                     ciudad
                     FROM usuarios
                     WHERE id_usuario = :id_usuario";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id_usuario", $id_usuario);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0){
            $i = 0;
            while($data = $modules->fetch(PDO::FETCH_ASSOC)){
                $arreglo[$i] = $data;
                $i++;
            }
        }
        return $arreglo;
    }

    function viewUsuarios()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $consulta = "SELECT
                     id_usuario,
                     identificacion,
                     nombres,
                     apellidos,
                     usuario,
                     contrasena,
                     email,
                     telefono,
                     rol,
                     estado,
                     departamento,
                     ciudad
                     FROM usuarios;";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0){
            $i = 0;
            while($data = $modules->fetch(PDO::FETCH_ASSOC)){
                $arreglo[$i] = $data;
                $i++;
            }
        }
        return $arreglo;
    }

    function countUsuarios()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT count(id_usuario) as cant
                     FROM usuarios";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        $total = 0;
        $total = $data['cant'];
        return $total;
    }
}
