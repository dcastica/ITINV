<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Usuarios - TIMS</title>
</head>
<body>
    <h3>Registrar nuevo usuario</h3>
    <a href="graficas.php">Atrás</a>
    <form method="POST" action="../src/build/registrar_usuario.php">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br>
            <label>Correo:</label><br>
            <input type="email" name="correo" required><br>
            <label>Contraseña:</label><br>
            <input type="password" name="password" required><br>
            <label>Rol:</label><br>
            <select name="rol">
                <option value="Usuario">Usuario</option>
                <option value="Admin">Administrador</option>
            </select><br><br>
            <input type="submit" value="Registrar">
    </form>
</body>
</html>