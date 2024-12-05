<?php
require 'conexion.php';
$usuario= $_POST['username'];
$contrasena= $_POST['password'];
session_start();
$_SESSION['username']=$usuario;

$consulta="SELECT Id_usuarios, Contrasena_Usuarios, Roles_Id_Roles 
                           FROM Usuarios 
                           WHERE Nombre_Usuarios = '".$usuario."'";
$resultado=mysqli_query($conexion,$consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $user = mysqli_fetch_assoc($resultado); // Extraer los datos del usuario

    // Comparar la contraseña
    if ($contrasena === $user['Contrasena_Usuarios']) {
        $_SESSION['user_id'] = $user['Id_usuarios'];
        $_SESSION['role_id'] = $user['Roles_Id_Roles'];

        // Redirigir según Roles_Id_Roles
        switch ($user['Roles_Id_Roles']) {
            case 1: // Administrador
                header("Location: ../pages/registroCalificaciones.php");
                break;
            case 2: // Profesor
                header("Location: ../pages/gestionEstudiantes.php");
                break;
            case 3: // Estudiante
                header("Location: student_dashboard.php");
                break;
            default:
                echo "Rol desconocido.";
        }
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

?>
