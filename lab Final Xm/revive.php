<?php

require_once("dbConnect.php");

if(isset($_REQUEST["editBtn"])){
	
	$editID = $_REQUEST["revive_id"];

	 


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

<!DOCTYPE html>
<html>
<head>
	<title>Edit Permit</title>
</head>
<body>

<form action="showData.php" method ="POST">

<?php

require_once("dbConnect.php");
$editID ="";

if(isset($_REQUEST["edit_id"])){
	
	$editID = $_REQUEST["edit_id"];


$selectInfo = "select * FROM my_users WHERE  id= '$editID' ";
$runQuery = mysqli_query($connect,$selectInfo);
if($selectInfo == true){

while($getdata = mysqli_fetch_array($runQuery)){ ?>



<div align="center" action="editData.php">
<input type="text" name="uname"value="<?php echo $getdata["UserName"]?>" placeholder=" name"><br><br>
<input type="text" name="pass" value="<?php echo $getdata["Password"]?>" placeholder="password"><br><br>
<input type="text" name="utype2" value="<?php echo $getdata["utype"]?>" placeholder="user type"><br><br>
<input type="text" name="permit" value="<?php echo $getdata["permit"]?>" placeholder="enter permit status : add 1 to activate id!"><br><br>
<input type="hidden" name="editingID"  value="<?php echo $getdata["id"]?>"
<input type="submit" name="editBtn" value="update Data"><br><br>
</div>


<?php }}
}

?>


</body>
</html>


<style type="text/css">
	
div {
  padding: 135px;
  font-size: 25px;
}

.division2{

 padding: 0px;
  font-size: 25px;

}

</style>