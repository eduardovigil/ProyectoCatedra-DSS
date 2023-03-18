<?php
session_start();
// Conectar a la base de datos
    include 'cone.php';
// Verificar si el usuario ha enviado el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Obtener los datos del usuario de la base de datos
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $pass =$_POST['password'];


    
    // Verificar si el usuario existe y si la contraseña es correcta
    if ($user && password_verify($pass, $user['password'])) {
        // Iniciar sesión y redirigir al usuario a la página de inicio
        $_SESSION['usuario'] = $user; 
        $rol = $user['idroles'];


        switch ($rol) {
            case 14:
                header('Location: ../html/GerenteSucursal.php');
                break;
            case 4:
                header('Location: ../html/cajero.php');
                break;
            case 24:
                header('Location: ../html/GerenteGeneral.php');
                break;
            case 34:
                header('Location: ../html/Cliente.php');
                break;
            case 44:
                header('Location: ../html/Dependiente.php');
                break;
            case 54:
                header('Location: ../html/PersonalLimpieza.php');
                break;
            case 64:
                header('Location: ../html/PersonalMesa.php');
            break;
            case 74:
                header('Location: ../html/Secretaria.php');
                break;
            case 84:
                header('Location: ../html/PersonalSeguridad.php');
                break;
            default:
                echo " No existe rol";
                break;
        }
        
        exit();
    } else {
        // Mostrar un mensaje de error
        $error = "Error los datos son distintos";
        header('Location: ../html/iniciosesion.php');
        
    }

    // Cerrar la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>




