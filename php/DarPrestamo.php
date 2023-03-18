<?php
// Incluir archivo de conexión a la base de datos
include("cone.php");

// Obtener ID del registro a actualizar
$idcuenta = isset($_POST['idcuenta']) ? $_POST['idcuenta'] : "";


// Validar que se haya ingresado un ID válido
if (!is_numeric($idcuenta)) {
	echo "El ID ingresado no es válido";
	exit;
}

// Consulta para actualizar el estado del registro
$sql = "UPDATE gestion SET estado = '1' WHERE idcuenta = $idcuenta";

if (mysqli_query($conn, $sql)) {
	echo "El estado del registro ha sido cambiado exitosamente";
	header('Location: ../html/vistaPrestamo.php');
} else {
	echo "Error al cambiar el estado del registro: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
