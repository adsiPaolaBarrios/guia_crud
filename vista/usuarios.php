<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_usuarios.js" charset="utf-8"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tabla"></div>
	</div>
        <?php
	include 'modales/modalUsuarios.php';
	?>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_usuarios.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_usuario = $('#id_usuario').val();
		    identificacion = $('#identificacion').val();
		    nombres = $('#nombres').val();
		    apellidos = $('#apellidos').val();
		    usuario = $('#usuario').val();
		    contrasena = $('#contrasena').val();
		    email = $('#email').val();
		    telefono = $('#telefono').val();
		    rol = $('#rol').val();
		    estado = $('#estado').val();
		    departamento = $('#departamento').val();
		    ciudad = $('#ciudad').val();
		    agregardatos(id_usuario, identificacion, nombres, apellidos, usuario, contrasena, email, telefono, rol, estado, departamento, ciudad);
		});
		$('#actualizadatos').click(function () {
		    modificarCliente();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
