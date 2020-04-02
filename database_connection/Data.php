<?php

require_once("dbConnect.php");


if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["email_addr"]) && isset($_REQUEST["usr_pwd"]) )
{

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email_addr =$_REQUEST["email_addr"];
$usr_pwd =$_REQUEST["usr_pwd"];

//echo $fname . " ".$lname . " " .$email_addr  . " " . $usr_pwd;

$inserQuery = "Insert into my_users(fname,lname,email_addr,usr_pwd)VALUES('$fname','$lname','$email_addr','$usr_pwd');";

	$runInsertQuery = mysqli_query($connect,$inserQuery);

	if($runInsertQuery == true){

		echo "row Inserted";
		header("location: index.php?action=true");
	}else{
		//echo "unable to Insert";
		header("location: index.php?action=false");
	}
}
else{


	echo "No data";
}

?>