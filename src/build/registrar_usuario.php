<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'Admin') {
    header("Location: ../../index.php");
    exit();
}

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $rol = $_POST['rol'];

    try {
        // Verifica si ya existe el correo
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM UsuariosInv WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();

        if ($stmt->fetchColumn() > 0) {
            die("Error: el correo ya existe.");
        }

        // Insertar nuevo usuario
        $stmt = $pdo->prepare("INSERT INTO UsuariosInv (nombre, correo, password, rol) VALUES (:nombre, :correo, :password, :rol)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':rol', $rol);
        $stmt->execute();

        echo "✅ Usuario registrado correctamente.";
        header("Location: ../../public/graficas.php?ok=1");
    } catch (PDOException $e) {
        echo "❌ Error en la base de datos: " . $e->getMessage();
    }
}
?>