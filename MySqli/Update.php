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
	
	//update query

	$updatequery = "Update my_users Set fname ='Tanmoy',lname='Debnath' where id =2";

	$runUpdateQuery = mysqli_query($connect,$updatequery);

	if($runUpdateQuery == true){

		echo "data updated";
	}else{
		echo "unable to update";
	}

   } 

else{

	echo mysqli_error($connect);
}

//echo $run_query;

	?>

</body>
</html>