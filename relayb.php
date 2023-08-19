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
    <a class="active" href="relayb.php">RelayB</a>
    <a href="relayc.php">RelayC</a>
    <a href="about.php">Tentang</a>
    <a href="daftar.php">Registrasi</a>
    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>

  </div>
 
</div><br>

<center>  <div style="padding-top: 65px"> 
<H2>RELAY B PERKELOMPOK</H2><br>
	
		<body>
      <h4>RELAY B (1 - 4):</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="on3">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="off3">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 24 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 25 out");
        
        			if(isset($_GET['on3'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 18 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 23 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 24 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 25 0");
                			echo "Relay B (1-4) ON";
        			}
        			else if(isset($_GET['off3'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 18 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 23 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 24 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 25 1");
                			echo "Relay B (1-4) OFF";
        			}
        		?>	
		</body> <br><br>

		<body>
      <h4>RELAY B (5 - 8):</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="on4">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="off4">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 8 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 7 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 12 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 16 out");
        
        			if(isset($_GET['on4'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 12 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 0");
                			echo "Relay B (5-8) ON";
        			}
        			else if(isset($_GET['off4'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 8 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 7 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 12 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 16 1");
                			echo "Relay B (5-8) OFF";
        			}
        		?>	
		</body> <br><br><br>


    <H2>RELAY B PERCHANNEL</H2><br>

		<body>
      <h4>RELAY B 1:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b1on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b1off">
        		</form>
		
        		<?php	
				      $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
        
        			if(isset($_GET['b1on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 18 0");
                			echo "Relay B 1 ON";
        			}
        			else if(isset($_GET['b1off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 18 1");
                			echo "Relay B 1 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY B 2:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b2on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b2off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 23 out");
        
        			if(isset($_GET['b2on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 23 0");
                			echo "Relay B 2 ON";
        			}
        			else if(isset($_GET['b2off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 23 1");
                			echo "Relay B 2 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY B 3:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b3on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b3off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 24 out");
        
        			if(isset($_GET['b3on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 24 0");
                			echo "Relay B 3 ON";
        			}
        			else if(isset($_GET['b3off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 24 1");
                			echo "Relay B 3 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY B 4:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b4on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b4off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 25 out");
        
        			if(isset($_GET['b4on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 25 0");
                			echo "Relay B 4 ON";
        			}
        			else if(isset($_GET['b4off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 25 1");
                			echo "Relay B 4 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY B 5:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b5on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b5off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 8 out");
        
        			if(isset($_GET['b5on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 8 0");
                			echo "Relay B 5 ON";
        			}
        			else if(isset($_GET['b5off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 8 1");
                			echo "Relay B 5 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY B 6:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b6on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b6off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 7 out");
        
        			if(isset($_GET['b6on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 7 0");
                			echo "Relay B 6 ON";
        			}
        			else if(isset($_GET['b6off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 7 1");
                			echo "Relay B 6 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY B 7:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b7on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b7off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 12 out");
        
        			if(isset($_GET['b7on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 12 0");
                			echo "Relay B 7 ON";
        			}
        			else if(isset($_GET['b7off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 12 1");
                			echo "Relay B 7 OFF";
        			}
        		?>	
		</body> <br><br>
    
    <body>
      <h4>RELAY B 8:</h4>
			<form method="get" action="relayb.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="b8on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="b8off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 16 out");
        
        			if(isset($_GET['b8on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 16 0");
                			echo "Relay B 8 ON";
        			}
        			else if(isset($_GET['b8off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 16 1");
                			echo "Relay B 8 OFF";
        			}
        		?>	
		</body> <br><br>

</center></div>
<center>   </center>

</body>
</html>