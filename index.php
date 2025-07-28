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
    <link rel="stylesheet" href="/src/css/index.css">
</head>

<body>
    <header class="cabecera"></header>
    <main class="cuerpo">
        <h2 class="cuerpo_titulo">Iniciar sesión</h2>
        <form method="POST" action="src/build/procesar_login.php" class="forms_cuerpo">
            <label>Correo:</label><br>
            <input type="text" name="usuario" required><br><br>
            <label>Contraseña:</label><br>
            <input type="password" name="contrasena" required><br><br>
            <input type="submit" value="Ingresar">
        </form>
        <p style="color:blue;"><?= $mensaje ?></p>
    </main>

</body>

</html>