<?php
// Llamando a la conexion
include 'cone.php';
//Lamando a las expresiones regulares
include 'expresiones.php';
if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fechanac']) && isset($_POST['email'])  && isset($_POST['password'])  && isset($_POST['submit'])){
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dui = $_POST["dui"];
    $fechaNac = date('Y-m-d',strtotime(($_POST['fechanac'])));
    $validar= "SELECT * FROM usuarios WHERE email = '$email'";
    if(preg_match($regexNombre,$nombre)){
        if(preg_match($regexApell,$apellido)){
            if(preg_match($regexDui,$dui)){
                if(preg_match($regexEmail,$email)){
                    if(preg_match($regexPass,$password)){
                        if(mysqli_query($conn, $validar)){
                            echo '<script type="text/javascript">alert(Correo ya existente");</script>';
                            header('Location: ../html/login.html');
                        }else{
                            // Encriptar la contraseña
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            // Insertar los datos en la base de datos
                            $sql = "INSERT INTO usuarios (nombre,apellido, email, password, dui, fechanac, idroles, idsucursal, estado) VALUES ('$nombre','$apellido', '$email', '$hashed_password','$dui','$fechaNac','34','4','1')";
                            if (mysqli_query($conn, $sql)) {
                                header("Location: ../html/login.html");
                            } else {
                                echo "Error al crear el registro: " . mysqli_error($conn);
                            }
                            // Cerrar la conexión a la base de datos
                            mysqli_close($conn);
                        }
                    }else{
                        echo '<script type="text/javascript">alert("Debe contener 2 Letras. Mayusculas 2 letras minusculas, 2 Números y 2 Simbolos.");</script>';
                        header('Location: ../html/login.html');
                    }
                }else{
                    echo '<script type="text/javascript">alert("Email solo puede llevar su correo y formato ejemplo@gmail.com.");</script>';
                    header('Location: ../html/login.html');
                }
            }else{
                echo '<script type="text/javascript">alert("Dui solo puede llevar numeros de 0 al 9.");</script>';
                header('Location: ../html/login.html');
            }
        }else{
            echo '<script type="text/javascript">alert("Apellidos solo pueden usar Letras y espacios.");</script>';
            header('Location: ../html/login.html');
        }
    }else{
        echo '<script type="text/javascript">alert("Nombres solo pueden usar Letras y espacios.");</script>';
        header('Location: ../html/login.html');

    }
}

?>
