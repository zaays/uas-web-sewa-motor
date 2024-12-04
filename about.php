<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
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
            <a href="#">About</a>
            <a href="list.php">Data Pemesanan</a>
            <a href="logout.php" onclick="return confirmLogout('Anda yakin ingin logout?');">Logout</a>
        </div>
        <!-- <div class="toggle" onclick="toggleMenu()">☰</div> -->
    </nav>

    
<div class="bg-light">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <img src="https://canadianbusiness.com/wp-content/uploads/2022/09/PinterestMain.png" class="card-image" alt="Motor Image">
      </div>
      <div class="card-body">
        <h3 class="text-center">About Us</h3>
        <p style="text-align: justify;">
        Kami, motosewa.id, berdiri sejak tahun 2024 dengan tujuan untuk memberikan kemudahan dalam menyewa motor bagi masyarakat. 
                Dengan pengalaman di bidang persewaan, kami menawarkan berbagai jenis motor, mulai dari motor matic, sport, hingga motor bebek 
                yang siap mendukung kebutuhan perjalanan Anda.
                <br><br>
                Layanan kami mencakup penyewaan motor harian, mingguan, hingga bulanan. Dengan harga yang bersahabat dan armada motor yang selalu 
                dalam kondisi prima, kami berkomitmen untuk memberikan pelayanan terbaik untuk Anda. Proses penyewaan pun mudah dan cepat, 
                sehingga Anda dapat menikmati perjalanan Anda tanpa khawatir.
                <br><br>
                Kami hadir dengan visi menjadi layanan sewa motor nomor satu yang dapat diandalkan. Hubungi kami untuk informasi lebih lanjut 
                atau langsung kunjungi kantor kami!
        </p>
      </div>
    </div>
  </div>
</div>

    <!-- Footer -->
    <footer>
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
