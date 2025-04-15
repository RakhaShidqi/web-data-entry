<?php
// Include file koneksi database
include('db.php');

// Query untuk mengambil data dari tabel
$sql = "SELECT name, email, phone FROM customers";  // Ganti 'customers' dengan nama tabel kamu
$result = $conn->query($sql);

// Array untuk menyimpan data
$data = [];

if ($result->num_rows > 0) {
    // Loop melalui hasil query dan masukkan ke dalam array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Menutup koneksi database
$conn->close();

// Kirim data dalam format JSON
echo json_encode(['data' => $data]);
?>