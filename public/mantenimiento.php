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
    <title>Hoja de Vida Equipos - TIMS</title>
</head>
<body>
    <h2>FORMATO HOJA DE VIDA DE EQUIPO</h2>
    <form method="POST" action="../src/build/registrar_mantenimiento.php" enctype="multipart/form-data">
        <h3>1. Hoja De Vida</h3>
        <label>Nombre Del Equipo:</label><br>
        <input type="text" name="equipo" required><br><br>

        <label>Marca:</label><br>
        <select name="marca" required>
            <option value="">--Seleccionar--</option>
            <option value="SAMSUNG">SAMSUNG</option>
            <option value="HP">HP</option>
        </select><br><br>

        <label>Modelo:</label><br>
        <select name="modelo" required>
            <option value="">--Seleccionar--</option>
            <option value="G4">G4</option>
            <option value="G5">G5</option>
            <option value="G6">G6</option>
            <option value="G9">G9</option>
        </select><br><br>

        <label>Número De Serie:</label><br>
        <input type="text" name="serial" required placeholder="Serial en Mayúsculas"><br><br>

        <h3>2. Especificaciones Técnicas</h3>
        <label>Procesador CORE-I:</label><br>
        <select name="procesador" required>
            <option value="">--Seleccionar--</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="7">7</option>
        </select><br>

        <label>Estado del Procesador:</label>
        <select name="estado_procesador" required>
            <option value="">--Seleccionar--</option>
            <option value="Bueno">Bueno</option>
            <option value="Regular">Regular</option>
            <option value="Malo">Malo</option>
        </select><br><br>

        <label>Memoria RAM (GB):</label><br>
        <input type="number" name="ram" required> GB<br>

        <label>Estado de la RAM:</label>
        <select name="estado_ram" required>
            <option value="">--Seleccionar--</option>
            <option value="Bueno">Bueno</option>
            <option value="Regular">Regular</option>
            <option value="Malo">Malo</option>
        </select><br><br>

        <label>Tipo de Disco Duro:</label><br>
        <select name="disco" required>
            <option value="">--Seleccionar--</option>
            <option value="SSD">SSD (Sólido)</option>
            <option value="M2">M2</option>
            <option value="HDD">HDD (Mecánico)</option>
        </select><br>

        <label>Estado del Disco Duro:</label>
        <select name="estado_disco" required>
            <option value="">--Seleccionar--</option>
            <option value="Bueno">Bueno</option>
            <option value="Regular">Regular</option>
            <option value="Malo">Malo</option>
        </select><br><br>

        <label>Sistema Operativo:</label>
        <select name="sistema" required>
            <option value="">--Seleccionar--</option>
            <option value="Windows 11">Windows 11</option>
        </select><br><br>

        <label>Imagen Antes #1:</label>
        <input type="file" name="imagen1" required><br><br>

        <label>Imagen Antes #2:</label>
        <input type="file" name="imagen2" required><br><br>

        <input type="submit" value="Crear Equipo">
    </form>
</body>
</html>