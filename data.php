<?php
// Matikan error output ke browser (gunakan log saat debugging)
error_reporting(0);

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_middleware");

// Cek koneksi
if (!$conn) {
    http_response_code(500);
    echo json_encode(["error" => "Koneksi gagal: " . mysqli_connect_error()]);
    exit;
}

// Jalankan query untuk memilih kolom tertentu
$sql = "SELECT customer_id, name, email, phone FROM customers"; // pilih kolom yang diinginkan
$result = mysqli_query($conn, $sql);

// Cek hasil query
if (!$result) {
    http_response_code(500);
    echo json_encode(["error" => "Query gagal: " . mysqli_error($conn)]);
    exit;
}

// Ambil data
$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Bersihkan output buffer sebelum echo JSON
ob_clean();
flush();

// Set header JSON
header('Content-Type: application/json');
http_response_code(200);
echo json_encode($rows);

// Tutup koneksi
mysqli_close($conn);
?>


