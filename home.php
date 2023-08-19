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
    <a class="active" href="home.php">Beranda</a>
    <a href="relaya.php">RelayA</a>
    <a href="relayb.php">RelayB</a>
    <a href="relayc.php">RelayC</a>
    <a href="about.php">Tentang</a>
    <a href="daftar.php">Registrasi</a>
    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>

  </div>
 
</div><br>

<center>  <div style="padding-top: 75px"> 
<H2>SEMUA RELAY</H2><br>
	
		<body>
      <h4>SEMUA RELAY:</h4>
			<form method="get" action="home.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="semuaon">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="semuaoff">
        		</form>
		
        		<?php	
				$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 2 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 3 out");
				$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
				$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 10 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 9 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 11 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 5 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 6 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 13 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 19 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 24 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 25 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 8 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 7 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 12 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 16 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 21 out");

        			if(isset($_GET['semuaon'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 27 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 22 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 10 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 9 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 11 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 13 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 19 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 26 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 18 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 23 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 24 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 25 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 12 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 20 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
                			echo "Semua Relay Hidup";
        			}
        			else if(isset($_GET['semuaoff'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 22 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 10 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 9 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 11 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 13 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 19 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 26 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 18 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 23 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 24 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 25 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 8 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 7 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 12 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 16 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 1");
                			echo "Semua Relay Mati";
        			}
        		?>	
		</body> <br><br><br>

    <H2>KELOMPOK RELAY</H2><br>

		<body>
      <h4>RELAY A:</h4>
			<form method="get" action="home.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="relaon">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="relaoff">
        		</form>
		
        		<?php	
				$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 2 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 3 out");
				$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
				$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 10 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 9 out");
        
              if(isset($_GET['relaon'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 27 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 22 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 10 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 9 0");                			
                echo "Relay A Hidup";
        			}
        			else if(isset($_GET['relaoff'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 22 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 10 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 9 1");                			
                echo "Relay A Mati";
        			}
        		?>	
		</body><br><br>



    <body>
      <h4>RELAY B:</h4>
			<form method="get" action="home.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="relbon">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="relboff">
        		</form>
		
        		<?php	
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 24 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 25 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 8 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 7 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 12 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 16 out");
        
              if(isset($_GET['relbon'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 18 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 23 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 24 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 25 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 12 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 0");               			
                echo "Relay B Hidup";
        			}
        			else if(isset($_GET['relboff'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 18 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 23 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 24 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 25 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 8 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 7 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 12 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 16 1");               			
                echo "Relay B Mati";
        			}
        		?>	
		</body><br><br>


		<body>
      <h4>RELAY C:</h4>
			<form method="get" action="home.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="relcon">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="relcoff">
        		</form>
		
        		<?php	
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 11 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 5 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 6 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 13 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 19 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 21 out");

        			if(isset($_GET['relcon'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 11 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 13 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 19 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 26 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 20 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
                			echo "Relay C Hidup";
        			}
        			else if(isset($_GET['relcoff'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 11 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 13 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 19 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 26 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 1");
                			echo "Relay C Mati";
        			}
        		?>	
		</body> <br><br>



</center></div>
<center>   </center>

</body>
</html>