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
		<label>id_operario</label>
		<input type="number" id="id_operario" class="form-control input-sm" required="">
		<label>identificacion</label>
		<input type="text" id="identificacion" class="form-control input-sm" required="">
		<label>nombres</label>
		<input type="text" id="nombres" class="form-control input-sm" required="">
		<label>apellidos</label>
		<input type="text" id="apellidos" class="form-control input-sm" required="">
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
	    <div class="modal-body">
		<label>id_operario</label>
		<input type="number" id="id_operariou" class="form-control input-sm" required="">
		<label>identificacion</label>
		<input type="text" id="identificacionu" class="form-control input-sm" required="">
		<label>nombres</label>
		<input type="text" id="nombresu" class="form-control input-sm" required="">
		<label>apellidos</label>
		<input type="text" id="apellidosu" class="form-control input-sm" required="">
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
