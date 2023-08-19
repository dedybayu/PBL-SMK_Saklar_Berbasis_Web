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
  <a class="active" href="relaya.php">RelayA</a>
  <a href="relayb.php">RelayB</a>
  <a href="relayc.php">RelayC</a>
  <a href="about.php">Tentang</a>
  <a href="daftar.php">Registrasi</a>
  <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>

</div>

</div><br>

<center>  <div style="padding-top: 65px"> 
<H2>RELAY A PERKELOMPOK</H2><br>

  <body>
    <h4>RELAY A (1 - 4):</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="on1">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="off1">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 2 out");
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 3 out");
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
      
            if(isset($_GET['on1'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 0");
                    echo "Relay A (1-4) ON";
            }
            else if(isset($_GET['off1'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 1");
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 1");
                    echo "Relay A (1-4) OFF";
            }
          ?>	
  </body> <br><br>

  <body>
    <h4>RELAY A (5 - 8):</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="on2">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="off2">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 10 out");
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 9 out");
      
            if(isset($_GET['on2'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 27 0");
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 22 0");
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 10 0");
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 9 0");
                    echo "Relay A (5-8) ON";
            }
            else if(isset($_GET['off2'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 1");
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 22 1");
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 10 1");
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 9 1");
                    echo "Relay A (5-8) OFF";
            }
          ?>	
  </body> <br><br><br>


  <H2>RELAY A PERCHANNEL</H2><br>

  <body>
    <h4>RELAY A 1:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a1on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a1off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 2 out");
      
            if(isset($_GET['a1on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 2 0");
                    echo "Relay A 1 ON";
            }
            else if(isset($_GET['a1off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 2 1");
                    echo "Relay A 1 OFF";
            }
          ?>	
  </body> <br><br>

  <body>
    <h4>RELAY A 2:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a2on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a2off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 3 out");
      
            if(isset($_GET['a2on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 0");
                    echo "Relay A 2 ON";
            }
            else if(isset($_GET['a2off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 1");
                    echo "Relay A 2 OFF";
            }
          ?>	
  </body> <br><br>

  <body>
    <h4>RELAY A 3:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a3on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a3off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 4 out");
      
            if(isset($_GET['a3on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 4 0");
                    echo "Relay A 3 ON";
            }
            else if(isset($_GET['a3off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 4 1");
                    echo "Relay A 3 OFF";
            }
          ?>	
  </body> <br><br>

  <body>
    <h4>RELAY A 4:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a4on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a4off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
      
            if(isset($_GET['a4on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 0");
                    echo "Relay A 4 ON";
            }
            else if(isset($_GET['a4off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 1");
                    echo "Relay A 4 OFF";
            }
          ?>	
  </body> <br><br>

  <body>
    <h4>RELAY A 5:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a5on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a5off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 27 out");
      
            if(isset($_GET['a5on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 27 0");
                    echo "Relay A 5 ON";
            }
            else if(isset($_GET['a5off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 27 1");
                    echo "Relay A 5 OFF";
            }
          ?>	
  </body> <br><br>

  <body>
    <h4>RELAY A 6:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a6on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a6off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 22 out");
      
            if(isset($_GET['a6on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 22 0");
                    echo "Relay A 6 ON";
            }
            else if(isset($_GET['a6off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 22 1");
                    echo "Relay A 6 OFF";
            }
          ?>	
  </body> <br><br>

  <body>
    <h4>RELAY A 7:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a7on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a7off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 10 out");
      
            if(isset($_GET['a7on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 10 0");
                    echo "Relay A 7 ON";
            }
            else if(isset($_GET['a7off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 10 1");
                    echo "Relay A 7 OFF";
            }
          ?>	
  </body> <br><br>
  
  <body>
    <h4>RELAY A 8:</h4>
    <form method="get" action="relaya.php">
                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: #22a4cf; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;" 
                  type="submit" value=" ON " name="a8on">

                  <input style= "font-family: sans-serif; font-size: 15px; 
                  background: red; color: white; border: white 3px solid; 
                  border-radius: 5px; padding: 12px 20px; margin-top: 10px;"
                  type="submit" value="OFF" name="a8off">
          </form>
  
          <?php	
            $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 9 out");
      
            if(isset($_GET['a8on'])){
              $gpio_on = shell_exec("/usr/local/bin/gpio -g write 9 0");
                    echo "Relay A 8 ON";
            }
            else if(isset($_GET['a8off'])){
              $gpio_off = shell_exec("/usr/local/bin/gpio -g write 9 1");
                    echo "Relay A 8 OFF";
            }
          ?>	
  </body> <br><br>

</center></div>
<center>   </center>

</body>
</html>