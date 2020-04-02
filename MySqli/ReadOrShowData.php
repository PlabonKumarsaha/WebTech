<!DOCTYPE html>
<html>
<head>
	<title>My Sql connection</title>
</head>
<body>

	<?php
    
    $servername = "loaclhost";
    $username = "root";
    $password = " ";
    $database = "testdb";

   // $connect = mysqli_connect("loaclhost","root"," ","testdb");

    $connect =  mysqli_connect("localhost","root"," ","testdb");

// Check connection
if ($connect -> connect_errno) {
  echo "<h1>Failed to connect to MySQL: " . $connect -> connect_error . "</h1>";
  exit();
}
else{

	echo "<h1>db connected!</h1>";
}

$query = "Select fname,lname from my_users;";

$run_query =mysqli_query($connect,$query);
//print_r($run_query);  //this is used to print the array like mysqli_result Object ( [current_field] => 0 [field_count] => 2 [lengths] => [num_rows] => 1 [type] => 0 ) 

//show number of rows


if($run_query ==true){

   $dataCount =mysqli_num_rows($run_query);
  // echo "total row : " . $dataCount . "<br>";

   if($dataCount>0){


   while($mydata= mysqli_fetch_array($run_query)){

   	  echo "<pre>";

   	 /* print_r($mydata); // shows in thsi format :: Array
(
    [0] => Plabon
    [fname] => Plabon
    [1] => Saha
    [lname] => Saha
)  */
     
      echo $mydata["fname"];
      echo "  ";
      echo $mydata["lname"];
      echo "<br>";
      echo "<br>";

    }

   } else{    echo "no data available"; }

}else{

	echo mysqli_error($connect);
}

//echo $run_query;

	?>

</body>
</html>
