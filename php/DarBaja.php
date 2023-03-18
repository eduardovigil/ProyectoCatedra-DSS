<?php
// Incluir archivo de conexión a la base de datos
include("cone.php");

// Obtener ID del registro a actualizar
$idusuario = isset($_POST['idusuario']) ? $_POST['idusuario'] : "";


// Validar que se haya ingresado un ID válido
if (!is_numeric($idusuario)) {
	echo "El ID ingresado no es válido";
	exit;
}

// Consulta para actualizar el estado del registro
$sql = "UPDATE usuarios SET estado = '0' WHERE idusuario = $idusuario";

if (mysqli_query($conn, $sql)) {
	echo "El estado del registro ha sido cambiado exitosamente";
	header('Location: ../html/Vistadeestado.php');
} else {
	echo "Error al cambiar el estado del registro: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
