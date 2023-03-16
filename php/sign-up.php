<?php
// Llamando a la conexion
include 'cone.php';
if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fechanac']) && isset($_POST['email']) && isset($_POST['rol']) && isset($_POST['sucursal']) && isset($_POST['password'])  && isset($_POST['submit'])){
        // Obtener los datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$dui = $_POST["dui"];
$fechaNac = date('Y-m-d',strtotime(($_POST['fechanac'])));
$rol = $_POST["rol"];
$sucursal = $_POST["sucursal"];

// Encriptar la contraseña
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insertar los datos en la base de datos

$sql = "INSERT INTO usuarios (nombre,apellido, email, password, dui, fechanac, idroles, idsucursal) VALUES ('$nombre','$apellido', '$email', '$hashed_password','$dui','$fechaNac','$rol','$sucursal')";
if (mysqli_query($conn, $sql)) {
    header("Location: ../view/iniciosesion.html");
} else {
    echo "Error al crear el registro: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

}

?>
