<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rekap Absensi - Sistem Absensi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root { --primary-red: #b30000; }
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; margin: 0; }
        
        .navbar { background: var(--primary-red); padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; color: white; }
        .navbar a { color: white; text-decoration: none; font-weight: 600; border: 1px solid white; padding: 5px 15px; border-radius: 5px; }
        
        .main-content { padding: 40px; }
        .container-table { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
        h2 { color: var(--primary-red); border-bottom: 3px solid var(--primary-red); padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: var(--primary-red); color: white; padding: 15px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #eee; }
        tr:hover { background-color: #fff5f5; }
        .btn-delete { color: #b30000; text-decoration: none; font-weight: bold; border: 1px solid #b30000; padding: 5px 10px; border-radius: 4px; }
        .btn-delete:hover { background: #b30000; color: white; }
    </style>
</head>
<body>

<div class="navbar">
    <span>Data Rekapitulasi</span>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</div>

<div class="main-content">
    <div class="container-table">
        <h2>Daftar Kehadiran</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Status</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM kehadiran ORDER BY waktu_absensi DESC");
            $no = 1;
            while($d = mysqli_fetch_array($data)){
                echo "<tr>
                        <td>".$no++."</td>
                        <td>".$d['nama']."</td>
                        <td>".$d['nim']."</td>
                        <td><span style='color:".($d['status']=='Hadir'?'green':'red')."; font-weight:bold;'>".$d['status']."</span></td>
                        <td>".$d['waktu_absensi']."</td>
                        <td>
                            <a href='hapus.php?id=".$d['id']."' class='btn-delete' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>