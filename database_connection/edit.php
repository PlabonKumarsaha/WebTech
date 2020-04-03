<!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
</head>
<body>

<form action="Data.php" method ="POST">

<?php

require_once("dbConnect.php");
$editID ="";

if(isset($_REQUEST["edit_id"])){
	
	$editID = $_REQUEST["edit_id"];


$selectInfo = "select * FROM my_users WHERE  id=5 ";
$runQuery = mysqli_query($connect,$selectInfo);
if($selectInfo == true){

while($getdata = mysqli_fetch_array($runQuery)){ ?>



<div align="center" action="editData.php">
<input type="text" name="fname"value="<?php echo $getdata["fname"]?>" placeholder="First name"><br><br>
<input type="text" name="lname" value="<?php echo $getdata["lname"]?>" placeholder="Last name"><br><br>
<input type="email" name="email_addr"  value="<?php echo $getdata["email_addr"]?>" placeholder="Mailing adress"><br><br>
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