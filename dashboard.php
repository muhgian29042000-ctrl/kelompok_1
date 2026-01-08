<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Absensi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root { --primary-red: #b30000; --dark-red: #7a0000; }
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
        
        .navbar { background: var(--primary-red); color: white; padding: 15px 50px; text-align: center; font-size: 20px; font-weight: 600; }
        
        .container { padding: 50px; display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; }
        
        .card { 
            background: white; width: 250px; padding: 30px; border-radius: 15px; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.1); text-align: center; transition: 0.3s;
            text-decoration: none; color: #333; border-bottom: 5px solid var(--primary-red);
        }
        
        .card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(179,0,0,0.2); }
        
        .card h3 { margin: 0; color: var(--primary-red); font-size: 24px; }
        .card p { font-size: 14px; color: #666; }
        
        .stat-box { 
            background: white; width: 80%; margin: 0 auto; padding: 20px; 
            border-radius: 10px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="navbar">SISTEM INFORMASI ABSENSI MAHASISWA</div>

<div class="container">
    <a href="index.php" class="card">
        <h3>Input Absensi</h3>
        <p>Catat kehadiran mahasiswa baru di sini.</p>
    </a>

    <a href="rekap.php" class="card">
        <h3>Rekap Data</h3>
        <p>Lihat dan kelola riwayat kehadiran.</p>
    </a>

    <div class="stat-box">
        <?php 
        $query = mysqli_query($conn, "SELECT COUNT(*) as total FROM kehadiran");
        $data = mysqli_fetch_assoc($query);
        ?>
        <strong>Total Data Masuk:</strong> <?php echo $data['total']; ?> Mahasiswa
    </div>
</div>

</body>
</html>