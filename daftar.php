<?php
session_start();
if (!isset($_SESSION['sesiData'])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
    <h3>Buat akun baru</h3>
	<div class="container">
		<?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
		<div class="regisForm">
			<form action="akunuser.php" method="post">
				<input type="text" name="nama_awal" placeholder="Nama Awal" required="">
				<input type="text" name="nama_akhir" placeholder="Nama Akhir" required="">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="text" name="telp" placeholder="Nomor Telp" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input type="password" name="confirm_password" placeholder="Konfirmasi Password" required="">
				<div class="tbl-kirim">
					<input type="submit" name="daftarSubmit" value="Buat Akun"><br><br>
				</div>
			</form>
			<a href="home.php">Batal</a>
		</div>
	</div>
</body>
</html>