<?php
  session_start();

$totalmoney = "";
  if(!(isset($_SESSION['totalmoneyMale']))) {
    header("Location: male.php");
  }
  if(!(isset($_SESSION['totalmoneyFemale']))) {
    header("Location: female.php");
  }
  
  if(!(isset($_SESSION['genmale']))) {
    header("Location: index.php");
	$totalmoney = $_SESSION['totalmoneyMale'];
  }
  else{
	 $totalmoney = $_SESSION['totalmoneyFemale']; 
  }
  echo "Total money : " .$totalmoney;
  
?>


<html>
  <head>
    
    <title>Total</title>
  </head>
  
  <body>
  <label for="sports"> select Sport(s): <?echo "Total money : " .$totalmoney;?></label><br>

  <input type="submit" value="Accept">
  <input type="submit" value="Reject">
</form>
  
  </body>
  
  </html>