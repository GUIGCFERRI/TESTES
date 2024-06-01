<?php

$servername = "localhost";
$database = "ZBomba";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
    die("Connection failed: " . mysqli_connect_error());
}
}
echo "Connected successfully";
mysqli_close($conn);

// connection railway 1
// user: root
// senha: jBlXsyZZXiCaGgBTmdYywxhCwdrNsjMk
// Host: monorail.proxy.rlwy.net
// Porta: 33909
// Default Database: railway

?>
