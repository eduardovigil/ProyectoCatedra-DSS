<?php
include("cone.php");
if($_POST){

$nombre = isset($_POST['nombre'])?$_POST['nombre']:"";
$apellido = isset($_POST['apellido'])?$_POST['apellido']:"";
$email = isset($_POST['email'])?$_POST['email']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
$dui = isset($_POST['dui'])?$_POST['dui']:"";
$fechaNac = date('Y-m-d',strtotime(($_POST['fechanac'])));
$rol = isset($_POST['rol'])?$_POST['rol']:"";
$sucursal = isset($_POST['sucursal'])?$_POST['sucursal']:"";

if(preg_match($regexNombre,$nombre)){
    if(preg_match($regexApell,$apellido)){
        if(preg_match($regexDui,$dui)){
            if(preg_match($regexEmail,$email)){
                if(preg_match($regexPass,$password)){
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO usuarios (nombre,apellido, email, password, dui, fechanac, idroles, idsucursal, estado) VALUES ('$nombre','$apellido', '$email', '$hashed_password','$dui','$fechaNac','$rol','$sucursal', '1')";
                    if (mysqli_query($conn, $sql)) {
                    header("Location: ../html/login.html");
                     } else {
                        echo "Error al crear el registro: " . mysqli_error($conn);
                     }
                }else{
                    echo 'Debe contener minimo 8 caracteres.';
                }
            }else{
                echo 'Email solo puede llevar su correo y formato ejemplo@gmail.com.';
            }
        }else{
            echo 'Dui solo puede llevar numeros de 0 al 9.';
        }
    }else{
        echo 'Apellidos solo pueden usar Letras y espacios.';
    }
}else{
    echo 'Nombres solo pueden usar Letras y espacios.';
}



}

?>