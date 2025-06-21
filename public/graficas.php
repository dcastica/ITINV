<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}

$nombre = $_SESSION['nombre'];
$rol = $_SESSION['rol'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - TIMS</title>
</head>
<body>
    <h2>Bienvenido, <?= htmlspecialchars($nombre) ?> (<?= htmlspecialchars($rol) ?>)</h2>
    <a href="../src/cerrar_sesion.php">Cerrar sesión</a>

    <?php if ($rol === 'Admin'): ?>
        <h3>Registrar nuevo usuario</h3>
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
    <?php else: ?>
        <a href="mantenimiento.php">Mantenimiento</a>
    <?php endif; ?>
</body>
</html>