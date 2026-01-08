<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $status = $_POST['status'];

    $query = "INSERT INTO kehadiran (nama, nim, status) VALUES ('$nama', '$nim', '$status')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Absensi berhasil dicatat!'); window.location='rekap.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>