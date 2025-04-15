<?php
$host = 'localhost';    // Ganti dengan host database kamu
$username = 'root';     // Ganti dengan username database kamu
$password = '';         // Ganti dengan password database kamu
$database = 'db_middleware';  // Ganti dengan nama database kamu

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
