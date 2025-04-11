<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_middleware");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Proses form jika tombol submit ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan sanitasi
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer-name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    // Query untuk memasukkan data
    $sql = "INSERT INTO customers (name, email, phone) VALUES ('$customer_name', '$email', '$phone')";
    
    // Eksekusi query dan cek hasilnya
    if (mysqli_query($conn, $sql)) {
        // Menampilkan alert jika berhasil
        echo "<script>alert('New customer added successfully!');</script>";
    } else {
        // Menampilkan alert jika gagal
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}

// Tutup koneksi
mysqli_close($conn);
?>