<?php
  session_start();

  if(!(isset($_SESSION['genFemale']))) {
    header("Location: index.php");
  }
  if(!(isset($_SESSION['femaleID']))) {
    header("Location: index.php");
  }
  echo "Welcome, " . $_SESSION['femaleID'];
  



<html >
  <head>
    
    <title>Total</title>
  </head>
  
  <body>
  <label for="sports"> select Sport(s): </label><br>

  <input type="submit" value="Accept">
  <input type="submit" value="Reject">
</form>
  
  </body>
  
  </html>