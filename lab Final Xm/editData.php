<?php

require_once("dbConnect.php");

if(isset($_REQUEST["editBtn"])){
	
	$editID = $_REQUEST["edit_id"];

	 


	$fname = $_REQUEST["uname"];
	$Password = $_REQUEST["pass"];
	$utype = $_REQUEST["utype2"];
	$permit = $_REQUEST["utype"];
	
    $editID = $_REQUEST["editingID"];
	

	$updateQuery = "Update my_users SET UserName = '$fname', Password = '$Password', permit= '$permit' where id = $editID";

	$runQUery = mysqli_query($connect,$updateQuery);

	if($runQUery == true)
	{
		header("location: showData.php?edited")
	}
	
}

?>