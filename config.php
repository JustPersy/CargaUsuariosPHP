<?php
// $servername = "localhost";
$servername = getenv("DB_SERVER") ?: "127.0.0.1";
$username   = getenv("DB_USER") ?: "dev";
$password   = getenv("DB_PASS") ?: "1234";
$dbname     = getenv("DB_NAME") ?: "prueba_gema";

function connectDB() {
    global $servername, $username, $password, $dbname;
    
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    if ($mysqli->connect_error) {
        header("Location: index.php?error=" . urlencode("Error de conexión: " . $mysqli->connect_error));
        exit;
    }
    return $mysqli;
}