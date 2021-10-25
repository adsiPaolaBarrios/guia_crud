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
		<label>id_usuario</label>
		<input type="number" id="id_usuario" class="form-control input-sm" required="">
		<label>identificacion</label>
		<input type="text" id="identificacion" class="form-control input-sm" required="">
		<label>nombres</label>
		<input type="text" id="nombres" class="form-control input-sm" required="">
		<label>apellidos</label>
		<input type="text" id="apellidos" class="form-control input-sm" required="">
		<label>usuario</label>
		<input type="text" id="usuario" class="form-control input-sm" required="">
		<label>contrasena</label>
		<input type="text" id="contrasena" class="form-control input-sm" required="">
		<label>email</label>
		<input type="text" id="email" class="form-control input-sm" required="">
		<label>telefono</label>
		<input type="text" id="telefono" class="form-control input-sm" required="">
		<label>rol</label>
		<input type="text" id="rol" class="form-control input-sm" required="">
		<label>estado</label>
		<input type="text" id="estado" class="form-control input-sm" required="">
		<label>departamento</label>
		<input type="text" id="departamento" class="form-control input-sm" required="">
		<label>ciudad</label>
		<input type="text" id="ciudad" class="form-control input-sm" required="">
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
		<label>id_usuario</label>
		<input type="number" id="id_usuariou" class="form-control input-sm" required="">
		<label>identificacion</label>
		<input type="text" id="identificacionu" class="form-control input-sm" required="">
		<label>nombres</label>
		<input type="text" id="nombresu" class="form-control input-sm" required="">
		<label>apellidos</label>
		<input type="text" id="apellidosu" class="form-control input-sm" required="">
		<label>usuario</label>
		<input type="text" id="usuariou" class="form-control input-sm" required="">
		<label>contrasena</label>
		<input type="text" id="contrasenau" class="form-control input-sm" required="">
		<label>email</label>
		<input type="text" id="emailu" class="form-control input-sm" required="">
		<label>telefono</label>
		<input type="text" id="telefonou" class="form-control input-sm" required="">
		<label>rol</label>
		<input type="text" id="rolu" class="form-control input-sm" required="">
		<label>estado</label>
		<input type="text" id="estadou" class="form-control input-sm" required="">
		<label>departamento</label>
		<input type="text" id="departamentou" class="form-control input-sm" required="">
		<label>ciudad</label>
		<input type="text" id="ciudadu" class="form-control input-sm" required="">
	    </div>
	    <div class="modal-footer">
		<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
		    Actualizar
		</button>
	    </div>
	</div>
    </div>
</div>
