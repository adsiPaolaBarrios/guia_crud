<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Operarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_operarios.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tabla"></div>
	</div>
        <?php
	include 'modales/modalOperarios.php';
	?>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_operarios.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_operario = $('#id_operario').val();
		    identificacion = $('#identificacion').val();
		    nombres = $('#nombres').val();
		    apellidos = $('#apellidos').val();
		    observaciones = $('#observaciones').val();
		    agregardatos(id_operario, identificacion, nombres, apellidos, observaciones);
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
