<?php
$servername = "localhost";
$username = "root"; // ganti jika perlu
$password = ""; // ganti jika perlu
$dbname = "shoe_recommendations";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
