<?php

date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
$conexion = new Conexion();
if(isset($_GET['accion'])){
    $accion = $_GET['accion'];
    if($accion == 'registrar'){
        $id_agenda = $_POST['id_agenda'];
        $fecha_hora = $_POST['fecha_hora'];
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $producto = $_POST['producto'];
        $operario_id = $_POST['operario_id'];
        $valor = $_POST['valor'];
        $comision = $_POST['comision'];
        $observaciones = $_POST['observaciones'];
        $sql = "INSERT INTO agenda(
                id_agenda, fecha_hora, placa, marca, producto, operario_id, valor, comision, observaciones
                )VALUES (?,?,?,?,?,?,?,?,?)";
        $reg = $conexion->prepare($sql);
        $reg->bindParam(1, $id_agenda);
        $reg->bindParam(2, $fecha_hora);
        $reg->bindParam(3, $placa);
        $reg->bindParam(4, $marca);
        $reg->bindParam(5, $producto);
        $reg->bindParam(6, $operario_id);
        $reg->bindParam(7, $valor);
        $reg->bindParam(8, $comision);
        $reg->bindParam(9, $observaciones);
        if($reg->execute() === TRUE){
            echo 1;
	} else {
            echo 0;
        }
    }else if($accion == 'modificar'){
        $id_agenda = $_POST['id_agenda'];
        $fecha_hora = $_POST['fecha_hora'];
        $placa = $_POST['placa'];
        $marca = $_POST['marca'];
        $producto = $_POST['producto'];
		$operario_id = $_POST['operario_id'];
		$valor = $_POST['valor'];
		$comision = $_POST['comision'];
		$observaciones = $_POST['observaciones'];
		$sql = "UPDATE agenda SET 
			fecha_hora=:fecha_hora,
			placa=:placa,
			marca=:marca,
			producto=:producto,
			operario_id=:operario_id,
			valor=:valor,
			comision=:comision,
			observaciones=:observaciones
			WHERE id_agenda = :id_agenda;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_agenda", $id_agenda);
		$reg->bindParam(":fecha_hora", $fecha_hora);
		$reg->bindParam(":placa", $placa);
		$reg->bindParam(":marca", $marca);
		$reg->bindParam(":producto", $producto);
		$reg->bindParam(":operario_id", $operario_id);
		$reg->bindParam(":valor", $valor);
		$reg->bindParam(":comision", $comision);
		$reg->bindParam(":observaciones", $observaciones);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'eliminar') {
		$id_agenda = $_POST['id_agenda'];
		$sql = "DELETE FROM agenda WHERE id_agenda = :id_agenda;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_agenda", $id_agenda);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
    }else{
        echo 2;
    }
}else{
    echo 3;
}
