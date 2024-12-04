<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

include 'functions.php';
$reza = query ("SELECT * FROM tbpinjam ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>motosewa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  

<nav class="navbar">
        <div class="logo">motosewa.id</div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="list.php">Data Pemesanan</a>
            <a href="logout.php" onclick="return confirmLogout('Anda yakin ingin logout?');">Logout</a>
        </div>
        <!-- <div class="toggle" onclick="toggleMenu()">☰</div> -->
    </nav>

    <h2>Data Pengguna</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Motor</th>
            <th>Tanggal</th>
            <th>No hp</th>
            <th>Nik</th>
            <th>tindakan</th>
        </tr>
        <?php  $i=1; ?>
        <?php foreach ($reza as $row): ?>
        <tr>
        <th><?= $i; ?></th>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["jenis"]; ?></td>
        <td><?= $row["tanggal"]; ?></td>
        <td><?= $row["no"]; ?></td>
        <td><?= $row["nik"]; ?></td>
        <td>
        <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Anda Yakin Ingin Mengahapus?')">Hapus</a>
        <a href="update.php?id=<?=$row["id"];?>">Ubah</a>                    
        </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
    </table>

    <br>

    <button onclick="location.href='index.php'">Kembali
    </button>

        <!-- Footer -->
        <footer class="footer">
        <p>&copy; 2024 motosewa.id - Semua Hak Dilindungi.</p>
        <p>Hubungi kami di +62 812-3456-7890 atau email: info@motosewa.id</p>
        <p>Lokasi: Jl. Serbajadi, Desa Pemanggilan, Kec.Natar, Lampung Selatan</p>
    </footer>

    <script>
        function confirmLogout() {
            return confirm("Apakah Anda yakin ingin logout?");
        }
    </script>
</body>
</html>