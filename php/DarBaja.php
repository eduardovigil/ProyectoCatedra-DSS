<?php
// Incluir archivo de conexión a la base de datos
include("cone.php");

// Obtener ID del registro a actualizar
$id_registro = isset($_POST['id_registro']) ? $_POST['id_registro'] : "";

// Validar que se haya ingresado un ID válido
if (!is_numeric($id_registro)) {
	echo "El ID ingresado no es válido";
	exit;
}

// Consulta para actualizar el estado del registro
$sql = "UPDATE tabla SET estado = 'inactiva' WHERE id = $id_registro";

if (mysqli_query($conn, $sql)) {
	echo "El estado del registro ha sido cambiado exitosamente";
} else {
	echo "Error al cambiar el estado del registro: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
