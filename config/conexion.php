<?php

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'tiendasVarias');

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else {
//     echo "Conexion OKi";
// }
?>