<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}
// $mensaje = isset($_GET['error']) ? "Error en datos" : "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Vida Equipos - TIMS</title>
</head>
<body>
    <h2>FORMATO HOJA DE VIDA DE EQUIPO</h2>
    <a href="../src/build/registrar_usuario.php">Atras</a>
    
    <form method="POST" action="">
        <h3>1. Hoja De Vida</h3>
        <label>Nombre Del Equipo:</label><br>
        <input type="text" name="equipo" required><br><br>
        <label>Marca:</label><br>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">SAMSUNG</option>
            <option value="">HP</option>
        </select><br><br>
        <label>Modelo:</label><br>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">G4</option>
            <option value="">G5</option>
            <option value="">G6</option>
            <option value="">G9</option>
        </select><br><br>
        <label>Número De Serie:</label><br>
        <input type="text" name="equipo" required placeholder="Serial en Mayusculas"><br><br>
        <h3>2. Especificaciones Técnicas</h3>
        <label>Procesador:</label><br>
        <label for="">CORE-I</label>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">3</option>
            <option value="">5</option>
            <option value="">7</option>
        </select><br>
        <label for="">Estado:</label>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">Bueno</option>
            <option value="">Regular</option>
            <option value="">Malo</option>
        </select><br><br>
        <label>Memoria RAM:</label><br>
        <label for="">RAM</label>
        <input type="text" name="" id="" required> GB <br>
        <label for="">Estado:</label>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">Bueno</option>
            <option value="">Regular</option>
            <option value="">Malo</option>
        </select><br><br>
        <label>Disco Duro:</label><br>
        <label for="">DISCO</label>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">SSD (Solido)</option>
            <option value="">M2</option>
            <option value="">HDD (Mecanico)</option>
        </select><br>
        <label for="">Estado:</label>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">Bueno</option>
            <option value="">Regular</option>
            <option value="">Malo</option>
        </select><br><br>
        <label for="">Sistema Operativo:</label>
        <select name="" id="" required>
            <option value="">--Seleccionar--</option>
            <option value="">Windows 11</option>
        </select><br><br>
        <label for="">Imagen Antes:</label>
        <input type="file" name="" id="" required><br><br>
        <label for="">Imagen Antes:</label>
        <input type="file" name="" id="" required><br><br>


        <input type="submit" value="Crear Equipo">
    </form>
    <!-- <p style="color:blue;"><?= $mensaje ?></p> -->
</body>
</html>