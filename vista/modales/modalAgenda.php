<?php
include_once '../modelo/datos-operarios.php';
$operarios = new Operarios();
$selectOperario = $operarios->viewOperarios();
?>
<!-- MODAL PARA INSERTAR REGISTROS -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
	    </div>
	    <div class="modal-body">
		<label>id_agenda</label>
		<input type="text" id="id_agenda" class="form-control input-sm" required="">
		<label>fecha</label>
		<input type="date" id="fecha" class="form-control input-sm" required="">
                <label>hora</label>
                <select id="hora" class="form-control input-sm" required="">
                <option value="08:11">08:11 am</option>
                <option value="09:12">09:12 pm</option>
                <option value="10:12">10:12 pm</option>
                <option value="11:12">11:12 pm</option>
                <option value="12:12">12:12 pm</option>
                </select>
		<label>placa</label>
		<input type="text" id="placa" class="form-control input-sm" required="">
		<label>marca</label>
		<input type="text" id="marca" class="form-control input-sm" required="">
		<label>producto</label>
		<input type="text" id="producto" class="form-control input-sm" required="">
		<label for="operario_id">Escoge un operario:</label>
		<select id="operario_id" class="form-control input-sm" required="">
		<option value="1">     ----     </option>
		<?php
		foreach($selectOperario as $filaOperario){
		?>
		<option value="<?php echo $filaOperario['id_operario']; ?>">
                    <?php echo $filaOperario['nombres']; ?> <?php echo $filaOperario['apellidos']; ?>
		</option>
		<?php
		}
		?>
		</select>
		<label>valor</label>
		<input type="number" id="valor" class="form-control input-sm" required="">
		<label>comision</label>
		<input type="number" id="comision" class="form-control input-sm" required="">
		<label>observaciones</label>
		<input type="text" id="observaciones" class="form-control input-sm" required="">
	    </div>
	    <div class="modal-footer">
		<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
		    Agregar
		</button>
	    </div>
	</div>
    </div>
</div>
<!-- MODAL PARA EDICION DE DATOS-->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
	    </div>
	    <div class="modal-body">
		<label>id_agenda</label>
		<input type="text" id="id_agendau" class="form-control input-sm" required="">
		<label>fecha_hora</label>
		<input type="date" id="fechau" class="form-control input-sm" required="">
		<label>hora</label>
                <input type="time" id="horau" class="form-control input-sm" required="">
                <label>placa</label>
		<input type="text" id="placau" class="form-control input-sm" required="">
		<label>marca</label>
		<input type="text" id="marcau" class="form-control input-sm" required="">
		<label>producto</label>
		<input type="text" id="productou" class="form-control input-sm" required="">
                <label for="operario_idu">Escoge un operario:</label>
                <select id="operario_idu" class="form-control input-sm" required="">
                <option value="1">     ----     </option>
                <?php
                foreach($selectOperario as $filaOperario){
                ?>
                <option value="<?php echo $filaOperario['id_operario']; ?>">
                    <?php echo $filaOperario['nombres']; ?> <?php echo $filaOperario['apellidos']; ?>
                </option>
                <?php
                }
                ?>
                </select>
                <label>valor</label>
		<input type="number" id="valoru" class="form-control input-sm" required="">
		<label>comision</label>
		<input type="number" id="comisionu" class="form-control input-sm" required="">
		<label>observaciones</label>
		<input type="text" id="observacionesu" class="form-control input-sm" required="">
	    </div>
	    <div class="modal-footer">
		<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
		    Actualizar
		</button>
	    </div>
	</div>
    </div>
</div>
