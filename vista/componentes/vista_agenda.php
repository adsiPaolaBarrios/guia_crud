<?php
include_once '../../modelo/datos-agenda.php';
$agenda = new Agenda();
$data = $agenda->viewCitas();
?>

<center>
<h2>agenda</h2>
</center>

<button class="btn btn-primary navbar-left" data-toggle="modal" data-target="#modalNuevo">
    Agregar agenda<span class="glyphicon glyphicon-plus"></span>
</button>

<table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>Nro.</th>
            <th>fecha_hora</th>
            <th>placa</th>
            <th>marca</th>
            <th>producto</th>
            <th>operario</th>
            <th>valor</th>
            <th>comisión</th>
            <th>observaciones</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($data as $fila){
            $datos = $fila['id_agenda'] . "||" .
                     $fila['fecha_hora'] . "||" .
                     $fila['placa'] . "||" .
                     $fila['marca'] . "||" .
                     $fila['producto'] . "||" .
                     $fila['operario_id'] . "||" .
                     $fila['valor'] . "||" .
                     $fila['comision'] . "||" .
                     $fila['observaciones'];
        ?>
        <tr>
            <td><?php echo $fila['id_agenda']; ?></td>
            <td><?php echo $fila['fecha_hora']; ?></td>
            <td><?php echo $fila['placa']; ?></td>
            <td><?php echo $fila['marca']; ?></td>
            <td><?php echo $fila['producto']; ?></td>
            <td><?php echo $fila['operario_nombres'] . " " . $fila['operario_apellidos']; ?></td>
            <td><?php echo $fila['valor']; ?></td>
            <td><?php echo $fila['comision']; ?></td>
            <td><?php echo $fila['observaciones']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos; ?>')"></button>
            </td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $fila['id_agenda']; ?>')"></button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
