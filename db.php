<?php
$host = 'localhost'; 
$db = 'luma';
$user = 'seu_usuario'; 
$pass = 'sua_senha'; 


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
