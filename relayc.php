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
    <a class="active" href="relayc.php">RelayC</a>
    <a href="about.php">Tentang</a>
    <a href="daftar.php">Registrasi</a>
    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>

  </div>
 
</div><br>

<center>  <div style="padding-top: 65px"> 
<H2>RELAY C PERKELOMPOK</H2><br>
	
		<body>
      <h4>RELAY C (1 - 4):</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="on5">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="off5">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 11 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 5 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 6 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 13 out");
        
        			if(isset($_GET['on5'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 11 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 13 0");
                			echo "Relay C (1-4) ON";
        			}
        			else if(isset($_GET['off5'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 11 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 13 1");
                			echo "Relay C (1-4) OFF";
        			}
        		?>	
		</body> <br><br>

		<body>
      <h4>RELAY C (5 - 8):</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="on6">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="off6">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 19 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
        
        			if(isset($_GET['on6'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 19 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 26 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 20 0");
                			echo "Relay C (5-8) ON";
        			}
        			else if(isset($_GET['off6'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 19 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 26 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 1");
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 1");
                			echo "Relay C (5-8) OFF";
        			}
        		?>	
		</body> <br><br><br>


    <H2>RELAY C PERCHANNEL</H2><br>

		<body>
      <h4>RELAY C 1:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c1on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c1off">
        		</form>
		
        		<?php	
				      $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 11 out");
        
        			if(isset($_GET['c1on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 11 0");
                			echo "Relay C 1 ON";
        			}
        			else if(isset($_GET['c1off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 11 1");
                			echo "Relay C 1 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY C 2:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c2on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c2off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 5 out");
        
        			if(isset($_GET['c2on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 5 0");
                			echo "Relay C 2 ON";
        			}
        			else if(isset($_GET['c2off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 5 1");
                			echo "Relay C 2 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY C 3:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c3on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c3off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 6 out");
        
        			if(isset($_GET['c3on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 0");
                			echo "Relay C 3 ON";
        			}
        			else if(isset($_GET['c3off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 1");
                			echo "Relay C 3 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY C 4:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c4on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c4off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 13 out");
        
        			if(isset($_GET['c4on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 13 0");
                			echo "Relay C 4 ON";
        			}
        			else if(isset($_GET['c4off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write  13 0");
                			echo "Relay C 4 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY C 5:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c5on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c5off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 19 out");
        
        			if(isset($_GET['c5on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 19 0");
                			echo "Relay C 5 ON";
        			}
        			else if(isset($_GET['c5off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 19 1");
                			echo "Relay C 5 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY C 6:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c6on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c6off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
        
        			if(isset($_GET['c6on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 26 0");
                			echo "Relay C 6 ON";
        			}
        			else if(isset($_GET['b6off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 26 1");
                			echo "Relay C 6 OFF";
        			}
        		?>	
		</body> <br><br>

    <body>
      <h4>RELAY C 7:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c7on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c7off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 21 out");
        
        			if(isset($_GET['c7on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 21 0");
                			echo "Relay C 7 ON";
        			}
        			else if(isset($_GET['c7off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 21 1");
                			echo "Relay C 7 OFF";
        			}
        		?>	
		</body> <br><br>
    
    <body>
      <h4>RELAY C 8:</h4>
			<form method="get" action="relayc.php">
                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: #22a4cf; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                    type="submit" value=" ON " name="c8on">

                		<input style= "font-family: sans-serif; font-size: 15px; 
                    background: red; color: white; border: white 3px solid; 
                    border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                    type="submit" value="OFF" name="c8off">
        		</form>
		
        		<?php	
              $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 20 out");
        
        			if(isset($_GET['c8on'])){
                $gpio_on = shell_exec("/usr/local/bin/gpio -g write 20 0");
                			echo "Relay C 8 ON";
        			}
        			else if(isset($_GET['c8off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 1");
                			echo "Relay C 8 OFF";
        			}
        		?>	
		</body> <br><br>



</center></div>
<center>   </center>

</body>
</html>