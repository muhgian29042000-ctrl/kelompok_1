<?php
// Tambahkan ini untuk melihat error jika layar putih lagi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'koneksi.php';

// Cek apakah ID ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Pastikan variabel $conn dari koneksi.php terbaca
    $query = "DELETE FROM kehadiran WHERE id = '$id'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='rekap.php';</script>";
    } else {
        echo "Gagal menghapus: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan! Kembali ke <a href='rekap.php'>Rekap</a>";
}
?>