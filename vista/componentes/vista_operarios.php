<?php
include_once '../../modelo/datos-operarios.php';
$operarios = new Operarios();
$data = $operarios->viewOperarios();
?>

<center>
<h2>Operarios</h2>
</center>

<button class="btn btn-primary navbar-left" data-toggle="modal" data-target="#modalNuevo">
    Agregar agenda<span class="glyphicon glyphicon-plus"></span>
</button>

<table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id_operario</th>
            <th>identificacion</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>observaciones</th>
        </tr>
   </thead>
    <tbody>
        <?php
        foreach($data as $fila){
            $datos = $fila['id_operario'] . "||" .
                     $fila['identificacion'] . "||" .
                     $fila['nombres'] . "||" .
                     $fila['apellidos'] . "||" .
                     $fila['observaciones'];
        ?>
        <tr>
            <td><?php echo $fila['id_operario']; ?></td>
            <td><?php echo $fila['identificacion']; ?></td>
            <td><?php echo $fila['nombres']; ?></td>
            <td><?php echo $fila['apellidos']; ?></td>
            <td><?php echo $fila['observaciones']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicion"
                               onclick="agregaform('<?php echo $datos; ?>')">
                </button></td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="preguntarSiNo('<?php echo $fila['id_operario']; ?>')">
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
