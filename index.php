<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Website Saklar Semegah</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
    <h2>Saklar Berbasis Website</h2>
	<div class="container">
        <?php
			if(!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])){
				include 'user.php';
				$user = new User();
				$kondisi['where'] = array(
					'id' => $sesiData['userID'],
				);
				$kondisi['return_type'] = 'single';
				$userData = $user->getRows($kondisi);
				header("Location: home.php");
		?>
        
		
		
		<h2>Selamat Datang <?php echo $userData['nama_awal']; ?>!</h2>
        <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>
		<div class="regisForm">
			<p><b>Nama: </b><?php echo $userData['nama_awal'].' '.$userData['nama_akhir']; ?></p>
            <p><b>Email: </b><?php echo $userData['email']; ?></p>
            <p><b>Telp: </b><?php echo $userData['telp']; ?></p>
		</div>


        <?php }else{ ?>
		<h3>Silahkan Login</h3>
        <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
		<div class="regisForm">
			<form action="akunuser.php" method="post">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="password" name="password" placeholder="Pssword" required="">
				<div class="tbl-kirim">
					<input type="submit" name="loginSubmit" value="Login">
				</div>
			</form>
		</div>
        
	</div>
	<?php } ?>
</body>
</html>