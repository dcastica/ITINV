<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
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
    <a href="../src/build/cerrar_sesion.php">Cerrar sesión</a>

    <?php if ($rol === 'Admin'): ?>
        <ul>
            <li><a href="graficas.php">Inicio</a></li>
            <li onclick="loadContent('registrarusuario.php','contenido')">Registrar Usuario</li>
        </ul>
    <?php else: ?>
        <li onclick="loadContent('mantenimiento.php','contenido')">Mantenimiento</li>
        
    <?php endif; ?>
    <section id="contenido">

    </section>
</body>
<script src="../src/js/paginas_contenido.js"></script>
</html>