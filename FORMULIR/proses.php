<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Input Pengguna</title>
</head>
<body>
  <h2>Hasil Input Data Pengguna</h2>

  <?php
  // Mengecek apakah form sudah dikirim
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Mengambil data dari form
      $nama = htmlspecialchars($_POST["nama"]);
      $alamat = htmlspecialchars($_POST["alamat"]);
      $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
      $jenis_kelamin = isset($_POST["jenis_kelamin"]) ? htmlspecialchars($_POST["jenis_kelamin"]) : '';

      // Mengecek apakah ada data yang kosong
      if (empty($nama) || empty($alamat) || empty($tanggal_lahir) || empty($jenis_kelamin)) {
          echo "<p style='color:red;'>Harap isi semua data dengan lengkap!</p>";
      } else {
          echo "<p><strong>Nama:</strong> $nama</p>";
          echo "<p><strong>Alamat:</strong> $alamat</p>";
          echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
          echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
      }
  } else {
      echo "<p style='color:red;'>Data tidak dikirim melalui form!</p>";
  }
  ?>
</body>
</html>