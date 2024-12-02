<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario y contraseña
    $stmt = $pdo->prepare("SELECT Id_Usuarios, Contrasena_Usuarios, Roles_Id_Roles 
                           FROM Usuarios 
                           WHERE Nombre_Usuarios = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validar usuario y contraseña
    if ($user && $password === $user['Contrasena_Usuarios']) {
        session_start();
        $_SESSION['user_id'] = $user['Id_usuarios'];
        $_SESSION['role_id'] = $user['Roles_Id_Roles'];

        // Redirigir según Roles_Id_Roles
        switch ($user['Roles_Id_Roles']) {
            case 1: // Administrador
                header("Location: admin_dashboard.php");
                break;
            case 2: // Profesor
                header("Location: professor_dashboard.php");
                break;
            case 3: // Estudiante
                header("Location: student_dashboard.php");
                break;
            default:
                echo "Rol desconocido.";
        }
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
