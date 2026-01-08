<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Absensi - Sistem Absensi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root { --primary-red: #b30000; --dark-red: #7a0000; --bg-color: #f8f9fa; }
        body { font-family: 'Poppins', sans-serif; background-color: var(--bg-color); margin: 0; }
        
        /* Navbar Baru */
        .navbar { background: var(--primary-red); padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; color: white; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .navbar a { color: white; text-decoration: none; font-weight: 600; border: 1px solid white; padding: 5px 15px; border-radius: 5px; transition: 0.3s; }
        .navbar a:hover { background: white; color: var(--primary-red); }

        .wrapper { display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 70px); }
        .container { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); width: 100%; max-width: 400px; border-top: 8px solid var(--primary-red); }
        h2 { color: var(--primary-red); text-align: center; margin-bottom: 25px; font-weight: 600; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; color: #444; }
        input, select { width: 100%; padding: 12px; border: 2px solid #eee; border-radius: 8px; box-sizing: border-box; outline: none; }
        input:focus { border-color: var(--primary-red); }
        button { width: 100%; background-color: var(--primary-red); color: white; padding: 14px; border: none; border-radius: 8px; cursor: pointer; font-weight: 600; transition: 0.3s; }
        button:hover { background-color: var(--dark-red); transform: translateY(-2px); }
    </style>
</head>
<body>

<div class="navbar">
    <span>Absensi Mahasiswa</span>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</div>

<div class="wrapper">
    <div class="container">
        <h2>Form Presensi</h2>
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan Nama..." required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM..." required>
            </div>
            <div class="form-group">
                <label>Status Kehadiran</label>
                <select name="status">
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                    <option value="Alpa">Alpa</option>
                </select>
            </div>
            <button type="submit" name="submit">Simpan Kehadiran</button>
        </form>
    </div>
</div>

</body>
</html>