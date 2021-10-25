<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Agenda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/funciones_agenda.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tabla"></div>
	</div>
        <?php
	include 'modales/modalAgenda.php';
	?>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_agenda.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_agenda = $('#id_agenda').val();
		    fecha_hora = $('#fecha').val() +" "+ $('#hora').val();
		    placa = $('#placa').val();
		    marca = $('#marca').val();
		    producto = $('#producto').val();
		    operario_id = $('#operario_id').val();
		    valor = $('#valor').val();
		    comision = $('#comision').val();
		    observaciones = $('#observaciones').val();
		    agregardatos(id_agenda, fecha_hora, placa, marca, producto, operario_id, valor, comision, observaciones);
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
