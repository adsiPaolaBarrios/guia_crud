<?php
date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
$conexion = new Conexion();
if (isset($_GET['accion'])) {
	$accion = $_GET['accion'];
	if ($accion == 'registrar') {
		$id_usuario = $_POST['id_usuario'];
		$identificacion = $_POST['identificacion'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$rol = $_POST['rol'];
		$estado = $_POST['estado'];
		$departamento = $_POST['departamento'];
		$ciudad = $_POST['ciudad'];
		$sql = "INSERT INTO usuarios(
			id_usuario, identificacion, nombres, apellidos, usuario, contrasena, email, telefono, rol, estado, departamento, ciudad
			)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(1, $id_usuario);
		$reg->bindParam(2, $identificacion);
		$reg->bindParam(3, $nombres);
		$reg->bindParam(4, $apellidos);
		$reg->bindParam(5, $usuario);
		$reg->bindParam(6, $contrasena);
		$reg->bindParam(7, $email);
		$reg->bindParam(8, $telefono);
		$reg->bindParam(9, $rol);
		$reg->bindParam(10, $estado);
		$reg->bindParam(11, $departamento);
		$reg->bindParam(12, $ciudad);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'modificar') {
		$id_usuario = $_POST['id_usuario'];
		$identificacion = $_POST['identificacion'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$rol = $_POST['rol'];
		$estado = $_POST['estado'];
		$departamento = $_POST['departamento'];
		$ciudad = $_POST['ciudad'];
		$sql = "UPDATE usuarios SET 
			identificacion=:identificacion,
			nombres=:nombres,
			apellidos=:apellidos,
			usuario=:usuario,
			contrasena=:contrasena,
			email=:email,
			telefono=:telefono,
			rol=:rol,
			estado=:estado,
			departamento=:departamento,
			ciudad=:ciudad
			WHERE id_usuario = :id_usuario;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_usuario", $id_usuario);
		$reg->bindParam(":identificacion", $identificacion);
		$reg->bindParam(":nombres", $nombres);
		$reg->bindParam(":apellidos", $apellidos);
		$reg->bindParam(":usuario", $usuario);
		$reg->bindParam(":contrasena", $contrasena);
		$reg->bindParam(":email", $email);
		$reg->bindParam(":telefono", $telefono);
		$reg->bindParam(":rol", $rol);
		$reg->bindParam(":estado", $estado);
		$reg->bindParam(":departamento", $departamento);
		$reg->bindParam(":ciudad", $ciudad);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'eliminar') {
		$id_usuario = $_POST['id_usuario'];
		$sql = "DELETE FROM usuarios WHERE id_usuario = :id_usuario;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_usuario", $id_usuario);
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
