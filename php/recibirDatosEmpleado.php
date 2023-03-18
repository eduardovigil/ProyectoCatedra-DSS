<?php
include("cone.php");
if($_POST){

$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$apellido = isset($_POST['apellido'])?$_POST['apellido']:"";
$email = isset($_POST['email'])?$_POST['email']:"";

$sql = "INSERT INTO usuarios (idusuario,nombre,apellido, email, cargo, fechanac, idroles, idsucursal, estado) VALUES (NULL,'$nombre','$apellido', '$email', 'cargo','34','4','1')";
if (mysqli_query($conn, $sql)) {
    header("Location: ../html/login.html");
} else {
    echo "Error al crear el registro: " . mysqli_error($conn);
}

}

?>