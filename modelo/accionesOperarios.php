<?php
date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
$conexion = new Conexion();
if (isset($_GET['accion'])) {
	$accion = $_GET['accion'];
	if ($accion == 'registrar') {
		$id_operario = $_POST['id_operario'];
		$identificacion = $_POST['identificacion'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$observaciones = $_POST['observaciones'];
		$sql = "INSERT INTO operarios(
			id_operario, identificacion, nombres, apellidos, observaciones
			)VALUES (?,?,?,?,?)";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(1, $id_operario);
		$reg->bindParam(2, $identificacion);
		$reg->bindParam(3, $nombres);
		$reg->bindParam(4, $apellidos);
		$reg->bindParam(5, $observaciones);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'modificar') {
		$id_operario = $_POST['id_operario'];
		$identificacion = $_POST['identificacion'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$observaciones = $_POST['observaciones'];
		$sql = "UPDATE operarios SET 
			identificacion=:identificacion,
			nombres=:nombres,
			apellidos=:apellidos,
			observaciones=:observaciones
			WHERE id_operario = :id_operario;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_operario", $id_operario);
		$reg->bindParam(":identificacion", $identificacion);
		$reg->bindParam(":nombres", $nombres);
		$reg->bindParam(":apellidos", $apellidos);
		$reg->bindParam(":observaciones", $observaciones);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'eliminar') {
		$id_operario = $_POST['id_operario'];
		$sql = "DELETE FROM operarios WHERE id_operario = :id_operario;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_operario", $id_operario);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else {
		echo 2;
	}
} else {
	echo 3;
}
