<?php
include_once '../../modelo/datos-usuarios.php';
$operarios = new Usuarios();
$data = $operarios->viewUsuarios();
?>

<center>
<h2>Usuarios</h2>
</center>

<button class="btn btn-primary navbar-left" data-toggle="modal" data-target="#modalNuevo">
    Agregar agenda<span class="glyphicon glyphicon-plus"></span>
</button>

<table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id_usuario</th>
            <th>identificacion</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>usuario</th>
            <th>contrasena</th>
            <th>email</th>
            <th>telefono</th>
            <th>rol</th>
            <th>estado</th>
            <th>departamento</th>
            <th>ciudad</th>
        </tr>
   </thead>
    <tbody>
        <?php
        foreach($data as $fila){
            $datos = $fila['id_usuario'] . "||" .
                     $fila['identificacion'] . "||" .
                     utf8_decode($fila['nombres']) . "||" .
                     utf8_decode($fila['apellidos']) . "||" .
                     $fila['usuario'] . "||" .
                     $fila['contrasena'] . "||" .
                     $fila['email'] . "||" .
                     $fila['telefono'] . "||" .
                     $fila['rol'] . "||" .
                     $fila['estado'] . "||" .
                     $fila['departamento'] . "||" .
                     $fila['ciudad'];
        ?>
        <tr>
            <td><?php echo $fila['id_usuario']; ?></td>
            <td><?php echo $fila['identificacion']; ?></td>
            <td><?php echo utf8_decode($fila['nombres']); ?></td>
            <td><?php echo utf8_decode($fila['apellidos']); ?></td>
            <td><?php echo $fila['usuario']; ?></td>
            <td><?php echo $fila['contrasena']; ?></td>
            <td><?php echo $fila['email']; ?></td>
            <td><?php echo $fila['telefono']; ?></td>
            <td><?php echo $fila['rol']; ?></td>
            <td><?php echo $fila['estado']; ?></td>
            <td><?php echo $fila['departamento']; ?></td>
            <td><?php echo $fila['ciudad']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicion"
                               onclick="agregaform('<?php echo $datos; ?>')">
                </button></td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="preguntarSiNo('<?php echo $fila['id_usuario']; ?>')">
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
