<?php
  session_start();

  if(!(isset($_SESSION['userName']))) {
    header("Location: login.php");
  }

  echo "Welcome, " . $_SESSION['userName'];

?>

<a href="logout.php">Logout</a>