<?php

require_once("dbConnect.php");

if(isset($_REQUEST["edit_id"])){
	
	$editID = $_REQUEST["edit_id"];

	 


	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$email_addr = $_REQUEST["email_addr"];
    $editID = $_REQUEST["editingID"];
	

	$updateQuery = "Update my_users SET fname = '$fname', lname = '$lname',email_addr = '$email_addr' where id = $editID";

	$runQUery = mysqli_query($connect,$updateQuery);

	if($runQUery == true)
	{
		header("location: index.php?edited")
	}
	
}

?>