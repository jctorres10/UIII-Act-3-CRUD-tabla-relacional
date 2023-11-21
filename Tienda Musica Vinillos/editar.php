<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="codigo">Código de barras:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">
			
			<label for="descripcion">Descripción:</label>
			<input value="<?php echo $producto->descripcion ?>" class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Descripción">

			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="Escribe la Categoria">

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="text" id="precio" placeholder="Precio">

			<label for="idProveedor">ID proveedor:</label>
			<input value="<?php echo $producto->idProveedor ?>" class="form-control" name="idProveedor" required type="text" id="idProveedor" placeholder="Escribe el ID proveedor">

			<label for="NomProveedor">Nombre del proveedor:</label>
			<input value="<?php echo $producto->NomProveedor ?>" class="form-control" name="NomProveedor" required type="text" id="NomProveedor" placeholder="Nombre del proveedor">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
