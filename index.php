<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: public/graficas.php");
    exit();
}
$mensaje = isset($_GET['error']) ? "Credenciales incorrectas" : "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TIMS</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form method="POST" action="src/procesar_login.php">
        <label>Correo:</label><br>
        <input type="text" name="usuario" required><br><br>
        <label>Contraseña:</label><br>
        <input type="password" name="contrasena" required><br><br>
        <input type="submit" value="Ingresar">
    </form>
    <p style="color:blue;"><?= $mensaje ?></p>
</body>
</html>