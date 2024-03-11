<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "dileksikayet"; 

// MySQL bağlantısını oluşturma
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
 