<?php
include 'functions.php';

session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

//ambil data di url
$id = $_GET["id"];

//query data pengunjung diambil dari id
$dp = query("SELECT * FROM tbpinjam WHERE id = $id")[0];

if (isset($_POST["submit"])){
    
  //buat test
  // var_dump($_POST);

  //alert
  if (update($_POST)>0){
      echo
      "<script>
          alert('Data Berhasil Diperbarui');
          document.location.href = 'list.php';
      </script>";
  }
  else{
      echo 
      "<script>
          alert('Data Gagal Diperbarui');
      </script>";
  }
} 

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

<div class="container">
    <h2>Ubah Data Pinjaman</h2>
    <form method="post">
    <input type="hidden" name="id" value="<?= $dp["id"]; ?>">
        <label>Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $dp["nama"]; ?>" required>
        <label>Jenis</label>
        <select name="jenis" id="jenis" value="<?= $dp["jenis"]; ?>" required>
        <option selected disabled value="<?= $dp["jenis"]; ?>">Pilih...</option>
        <option>Aerok</option>
    <option>Vario 150</option>
    <option>Beat karbu</option>
    <option>Supra xr</option>
    <option>Revo</option>
    <option>jupiter</option>
    <option>vixion r</option>
    <option>pulsar</option>
    <option>ninja r</option>
    </select>
    <br>
    <br>
    <label>Tanggal</label>
    <input type="date" name="tanggal" id="tanggal" value="<?= $dp["tanggal"]; ?>" required>
    <label>No</label>
    <input type="text" name="no" id="no" value="<?= $dp["no"]; ?>" required>
    <label>NIK</label>
    <input type="text" name="nik" id="nik" value="<?= $dp["nik"]; ?>" required>
    <button name="submit" type="submit">Simpan</button>
    <button><a href="list.php">Kembali</a></button>
    </form>
</div>


        <!-- Footer -->
        <footer>
        <p>&copy; 2024 moto.go.id - Semua Hak Dilindungi.</p>
        <p>Hubungi kami di +62 812-3456-7890 atau email: info@moto.go.id</p>
        <p>Lokasi: Jl. Serbajadi, Desa Pemanggilan, Kec.Natar, Lampung Selatan</p>
    </footer>

    <script>
        function confirmLogout() {
            return confirm("Apakah Anda yakin ingin logout?");
        }
    </script>
</body>
</html>
