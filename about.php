<?php
session_start();
if (!isset($_SESSION['sesiData'])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>Website Saklar Semegah</title>
</head>
<body>
<div class="navbar">
 
  <!-- Navbar logo -->
  <div class="nav-header">
    <div class="nav-logo">
      <a href="home.php">
        <img src="logonavbar.png" width="260px" alt="logo">
      </a>
    </div>
  </div>
   
  <!-- responsive navbar toggle button -->
  <input type="checkbox" id="nav-check">
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
 
  <!-- Navbar items -->
  <div class="nav-links">
    <a href="home.php">Beranda</a>
    <a href="relaya.php">RelayA</a>
    <a href="relayb.php">RelayB</a>
    <a href="relayc.php">RelayC</a>
    <a class="active" href="about.php">Tentang</a>
    <a href="daftar.php">Registrasi</a>
    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>

  </div>
 
</div><br>

<center>  <div style="padding-top: 75px"> 
<h1>Tentang</h1>
<h2>Saklar Berbasis Web</h2><br><br>
<h4>Saklar Berbasis Web ini dibuat oleh:</h4>
<p>Dedy Bayu Setiawan (XII TKJ-1 2022-2023)</p><br>
<h4>Dibuat untuk melengkapi tugas Project Base Learning</h4><br>
<h4>Deskripsi:</h4>
<p>Kami membuat inovasi bernama Saklar Berbasis Web</p>
<p>Alat ini berfungsi sebagai pengganti saklar konvensional</p>
<p>Web berisi kumpulan tombol yang berfungsi sebagai saklar</p>
<p>Anda bisa masuk ke beberapa menu untuk mengontrol saklar</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="color:#828282;">Support by DBS Network</p>
</center></div>
<center>   </center>

</body>
</html>