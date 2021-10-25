<?php

class Operarios
{
    function viewOperario($id_operario)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $consulta = "SELECT
                     id_operario,
                     identificacion,
                     nombres,
                     apellidos,
                     observaciones
                     FROM operarios
                     WHERE id_operario = :id_operario";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id_operario", $id_operario);
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

    function viewOperarios()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $consulta = "SELECT
                     id_operario,
                     identificacion,
                     nombres,
                     apellidos,
                     observaciones
                     FROM operarios;";
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

    function countOperarios()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT count(id_operario) as cant
                     FROM operarios";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        $total = 0;
        $total = $data['cant'];
        return $total;
    }
}
