<!-- <?php
// session_start();
// if (isset($_SESSION['usuario'])) {
//     header("Location: public/graficas.php");
//     exit();
// }
// $mensaje = isset($_GET['error']) ? "Error en datos" : "";
?> -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Vida Equipos - TIMS</title>
</head>
<body>
    <h2>FORMATO HOJA DE VIDA DE EQUIPO</h2>
    <a href="../src/cerrar_sesion.php">Cerrar sesión</a>
    
    <form method="" action="">
        <h3>1. Hoja De Vida</h3>
        <label>Nombre Del Equipo:</label><br>
        <input type="text" name="equipo" required><br><br>
        <label>Marca:</label><br>
        <select name="" id="">
            <option value="">SAMSUNG</option>
            <option value="">HP</option>
        </select><br><br>
        <label>Modelo:</label><br>
        <input type="text" name="equipo" required><br><br>
        <label>Número De Serie:</label><br>
        <input type="text" name="equipo" required><br><br>
        <h3>Especificaciones Técnicas</h3>
        <label>Procesador:</label><br>
        <label for="">CORE-I</label>
        <select name="" id="">
            <option value="">3</option>
            <option value="">5</option>
            <option value="">7</option>
        </select><br>
        <label for="">Estado:</label>
        <select name="" id="">
            <option value="">Bueno</option>
            <option value="">Regular</option>
            <option value="">Malo</option>
        </select><br><br>
        <label>Memoria RAM:</label><br>
        <label for="">RAM</label>
        <input type="text" name="" id="">GB <br>
        <label for="">Estado:</label>
        <select name="" id="">
            <option value="">Bueno</option>
            <option value="">Regular</option>
            <option value="">Malo</option>
        </select><br><br>
        <label>Disco Duro:</label><br>
        <label for="">DISCO</label>
        <select name="" id="">
            <option value="">SSD (Solido)</option>
            <option value="">M2</option>
            <option value="">HDD (Mecanico)</option>
        </select><br>
        <label for="">Estado:</label>
        <select name="" id="">
            <option value="">Bueno</option>
            <option value="">Regular</option>
            <option value="">Malo</option>
        </select><br><br>
        <input type="submit" value="Ingresar">
    </form>
    <!-- <p style="color:blue;"><?= $mensaje ?></p> -->
</body>
</html>