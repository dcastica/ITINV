<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php");
    exit();
}

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Variables del formulario
    $equipo = $_POST['equipo'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $serial = strtoupper($_POST['serial']);
    $procesador = $_POST['procesador'];
    $estado_procesador = $_POST['estado_procesador'];
    $ram = $_POST['ram'];
    $estado_ram = $_POST['estado_ram'];
    $disco = $_POST['disco'];
    $estado_disco = $_POST['estado_disco'];
    $sistema = $_POST['sistema'];
    $usuario_registro = $_SESSION['usuario'];

    // Carpeta de subida
    $carpeta = "uploads/";
    if (!is_dir($carpeta)) mkdir($carpeta, 0777, true);

    function subirImagen($campo) {
        global $carpeta;
        $nombreArchivo = $_FILES[$campo]['name'];
        $tmp = $_FILES[$campo]['tmp_name'];
        $ext = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $nuevoNombre = uniqid("img_") . "." . $ext;
        $destino = $carpeta . $nuevoNombre;

        if (move_uploaded_file($tmp, $destino)) {
            return $destino;
        } else {
            die("Error al subir la imagen '$campo'");
        }
    }

    $imagen1 = subirImagen('imagen1');
    $imagen2 = subirImagen('imagen2');

    // Consulta SQL
    $sql = "INSERT INTO equipos (
        equipo, marca, modelo, serial, procesador, estado_procesador,
        ram, estado_ram, disco, estado_disco, sistema, imagen1, imagen2,
        usuario_registro
    ) VALUES (
        :equipo, :marca, :modelo, :serial, :procesador, :estado_procesador,
        :ram, :estado_ram, :disco, :estado_disco, :sistema, :imagen1, :imagen2,
        :usuario_registro
    )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':equipo' => $equipo,
        ':marca' => $marca,
        ':modelo' => $modelo,
        ':serial' => $serial,
        ':procesador' => $procesador,
        ':estado_procesador' => $estado_procesador,
        ':ram' => $ram,
        ':estado_ram' => $estado_ram,
        ':disco' => $disco,
        ':estado_disco' => $estado_disco,
        ':sistema' => $sistema,
        ':imagen1' => $imagen1,
        ':imagen2' => $imagen2,
        ':usuario_registro' => $usuario_registro
    ]);

    header("Location: ../../public/mantenimiento.php?ok=1");
    exit();
}
?>