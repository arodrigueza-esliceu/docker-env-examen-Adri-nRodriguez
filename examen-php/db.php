
<?php
$serverName = "db";               
$username   = "admin";    
$password   = "admin123";  
$dbName     = "futbol";         


$conn = new mysqli($serverName, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);

