<?php
    
    $servername = "loaclhost";
    $username = "root";
    $password = " ";
    $database = "examdb";

   // $connect = mysqli_connect("loaclhost","root"," ","testdb");

    $connect =  mysqli_connect("localhost","root"," ","examdb");

// Check connection
if ($connect -> connect_errno) {
  echo "<h1>Failed to connect to MySQL: " . $connect -> connect_error . "</h1>";
  exit();
}
else{

	echo "<h1>db connected!</h1>";
}

?>