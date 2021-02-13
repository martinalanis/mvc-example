<div>
	<h4>Listado de productos</h4>
	<table class="table">
		<?php foreach ($this->data as $producto): ?>
			<tr>
				<td>
					<?php echo $producto['nombre']; ?>
				</td>
				<td>
					<?php echo $producto['cantidad']; ?>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>