<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
	
			<label for="codigo">Código de barras:</label>
			<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
			
			<label for="descripcion">Descripción:</label>
			<input class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Descripción">

			<label for="categoria">Categoria:</label>
			<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Escribe la Categoria">

			<label for="precio">Precio:</label>
			<input class="form-control" name="precio" required type="text" id="precio" placeholder="Precio">

			<label for="idProveedor">ID proveedor:</label>
			<input class="form-control" name="idProveedor" required type="text" id="idProveedor" placeholder="Escribe el ID proveedor">

			<label for="NomProveedor">Nombre del proveedor:</label>
			<input class="form-control" name="NomProveedor" required type="text" id="NomProveedor" placeholder="Nombre del proveedor">

			<label for="existencia">Existencia:</label>
			<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>