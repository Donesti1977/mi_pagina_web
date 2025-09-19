<?php
/*
$host = 'localhost';
$dbname = 'biblioteca';
$usuario = 'root';
$contraseña = '';
*/
#Esta es la conexion al server
$host = 'sql301.infinityfree.com';
$dbname = 'if0_39318120_portfolio';
$usuario = 'if0_39318120';
$contraseña = 'Xjnu00voaQ';


try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4"; // Incluir charset para evitar problemas de codificación
    $opciones = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Habilitar manejo de errores
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de obtención de resultados
        PDO::ATTR_EMULATE_PREPARES   => false, // Deshabilitar emulación de sentencias preparadas
    ];
    $conexion = new PDO($dsn, $usuario, $contraseña, $opciones);


} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
    exit;
}
?>