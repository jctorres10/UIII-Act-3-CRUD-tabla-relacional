<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["codigo"]) || !isset($_POST["descripcion"]) || !isset($_POST["categoria"]) || !isset($_POST["precio"]) || !isset($_POST["idProveedor"]) || !isset($_POST["NomProveedor"]) || !isset($_POST["existencia"])){ exit(); }

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$idProveedor = $_POST["idProveedor"];
$NomProveedor = $_POST["NomProveedor"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("INSERT INTO `productos`(`codigo`, `descripcion`, `categoria`, `precio`, `idProveedor`, `NomProveedor`, `existencia`) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo, $descripcion, $categoria, $precio, $idProveedor, $NomProveedor, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>