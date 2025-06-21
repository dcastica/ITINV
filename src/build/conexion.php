<?php
$host = '10.148.216.246';
$db = 'Inventario diademas';
$user = 'dcastica';
$pass = 'Dani123.';

try {
    $pdo = new PDO("sqlsrv:Server=$host;Database=$db;TrustServerCertificate=true", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}