<?php if ($this->response && $this->response === 'si'): ?>
	<div class="alert alert-success mt-3" role="alert">
		Se agrego el producto.
	</div>
<?php elseif($this->response && $this->response === 'fallo'): ?>
	<div class="alert alert-danger mt-3" role="alert">
		Fallo al guardar los datos
	</div>
<?php endif; ?>
<form action="<?php echo constant('URL'); ?>agregar/insert" method="POST">
	<div class="row">
		<div class="col col-8">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>
		<div class="col col-4">
			<label for="cantidad" class="form-label">Cantidad</label>
			<input type="number" class="form-control" id="cantidad" name="cantidad">
		</div>
		<div class="col col-12 mt-3">
			<button type="submit" class="btn btn-success">Guardar</button>
		</div>		
	</div>
</form>