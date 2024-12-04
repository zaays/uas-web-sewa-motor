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
            <a href="#">Home</a>
            <a href="about.php">About</a>
            <a href="list.php">Data Pemesanan</a>
            <a href="logout.php" onclick="return confirmLogout('Anda yakin ingin logout?');">Logout</a>
        </div>
        <!-- <div class="toggle" onclick="toggleMenu()">☰</div> -->
    </nav>

    <!-- Banner Utama -->
    <div class="banner">
        <h1>Selamat Datang di motosewa.id</h1>
        <p>Sewa motor mudah, cepat, dan terpercaya!</p>
        <button onclick="location.href='create.php'">Pesan Sekarang</button>
    </div>

    <!-- Fitur Utama -->
    <section class="features">
        <h2>Keunggulan Kami</h2>
        <div class="feature-list">
            <div class="feature">
                <h3>Proses Cepat</h3>
                <p>Peminjaman motor hanya dalam beberapa langkah mudah.</p>
            </div>
            <div class="feature">
                <h3>Harga Terjangkau</h3>
                <p>Nikmati layanan rental motor dengan harga terbaik.</p>
            </div>
            <div class="feature">
                <h3>Motor Terawat</h3>
                <p>Motor kami selalu dalam kondisi prima dan siap digunakan.</p>
            </div>
        </div>
    </section>

    <!-- Kategori Motor -->
    <section class="categories">
        <h2>Jenis Motor yang Tersedia</h2>
        <div class="motor-gallery">
            <div>
                <img src="https://cdn.quicksell.co/-NUBkS0wXkhtJ1F5DHn9/products/-Nd0LqTyj9ZQtIyf5owN.jpg" alt="Motor Bebek">
                <p>Motor Manual</p>
            </div>
            <div>
                <img src="https://warta.usm.ac.id/wp-content/uploads/2021/01/WhatsApp-Image-2021-01-06-at-16.10.53.jpeg" alt="Motor Matic">
                <p>Motor Matic</p>
            </div>
            <div>
                <img src="https://cdn0-production-images-kly.akamaized.net/KUMS7rDpwPVpoyFVQqnzOHA9WrI=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/881452/original/076850900_1432180442-DSC_2180.JPG" alt="Motor Sport">
                <p>Motor Copling</p>
            </div>
        </div>
    </section>

    <!-- Testimoni Pelanggan -->
    <section class="testimonials">
        <h2>Apa Kata Pelanggan Kami</h2>
        <blockquote>
            <p>"Layanan sangat memuaskan, motor dalam kondisi prima!"</p>
            <cite>- Andi, Jakarta</cite>
        </blockquote>
        <blockquote>
            <p>"Proses cepat dan mudah. Sangat membantu!"</p>
            <cite>- Rina, Bandung</cite>
        </blockquote>
    </section>

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
