<?php

class Agenda
{
    function viewCita($id_agenda)
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $consulta = "SELECT
                     age.id_agenda as id_agenda,
                     age.fecha_hora as fecha_hora,
                     age.placa as placa,
                     age.marca as marca,
                     age.producto as producto,
                     age.operario_id as operario_id,
                     age.valor as valor,
                     age.comision as comision,
                     age.observaciones as observaciones,
                     ope.nombres as operario_nombres,
                     ope.apellidos as operario_apellidos
                     FROM agenda as age, operarios as ope
                     WHERE ope.id_operario = age.operario_id
                     AND age.id_agenda = :id_agenda";
        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id_agenda", $id_agenda);
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

    function viewCitas()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $arreglo = array();
        $consulta = "SELECT
                     age.id_agenda as id_agenda,
                     age.fecha_hora as fecha_hora,
                     age.placa as placa,
                     age.marca as marca,
                     age.producto as producto,
                     age.operario_id as operario_id,
                     age.valor as valor,
                     age.comision as comision,
                     age.observaciones as observaciones,
                     ope.nombres as operario_nombres,
                     ope.apellidos as operario_apellidos
                     FROM agenda as age, operarios as ope
                     WHERE ope.id_operario = age.operario_id;";
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

    function countCitas()
    {
        require_once 'conexion.php';
        $conexion = new Conexion();
        $consulta = "SELECT count(id_agenda) as cant
                     FROM agenda";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $data = $modules->fetch(PDO::FETCH_ASSOC);
        $total = 0;
        $total = $data['cant'];
        return $total;
    }
}
