<?php
include('db.php');

// Query untuk mengambil data dari tabel
$sql = "SELECT subscription_id, customer_id, service_start_date, next_billing_date, amount, status FROM subscriptions"; // Tabel Subscriptions
$result = $conn->query($sql);

// Cek apakah query berhasil dijalankan
if ($result === false) {
    // Menampilkan error jika query gagal
    die(json_encode(["error" => "Query failed: " . $conn->error]));
}

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
header('Content-Type: application/json');
echo json_encode(['data' => $data]);  // Mengirim data dalam format JSON dengan key 'data'
?>
