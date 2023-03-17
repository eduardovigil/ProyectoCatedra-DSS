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
        
        header('Location: ../view/dashboard.php');
        exit();
    } else {
        // Mostrar un mensaje de error
        echo "<script>alert('Error los datos son distintos')</script>";
        header('Location: ../view/iniciosesion.html');
        
    }

    // Cerrar la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>




