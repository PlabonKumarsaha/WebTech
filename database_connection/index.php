<!DOCTYPE html>
<html>
<head>
	<title>My Sql connection</title>
</head>
<body>

<form action="Data.php" method ="POST" enctype="multipart/form-data">




	<div  align="center" >

			<?php
if(isset($_REQUEST['action'])){

if($_REQUEST["action"] == "true"){

	echo "<font color='green'>data inserted!</font> <br>";
}else{

	echo "<font color='red'>data not inserted!</font><br>";
}

}  ?>

<input type="text" name="fname" placeholder="First name"><br><br>
<input type="text" name="lname" placeholder="Last name"><br><br>
<input type="email" name="email_addr" placeholder="Mailing adress"><br><br>
<input type="password" name="usr_pwd" placeholder="Password"><br><br>
<input type="file" name="avatar"><br><br>
<input type="submit" name="submitBtn" value="Save Data"><br><br>


</div>
</form>

<div class ="division2" align="center">

	<?php if(isset($_REQUEST["deleted"])){

    echo "Data has been deleted!";

	} ?>

<table border="1px">
<tr>
<td><b>First Name </b></td>
<td><b>Last Name </b></td>
<td><b>Email Adress</b></td>
<td><b>Pro pic</b></td>
<td><b>Action</b></td>



</tr>

<?php require_once("dbConnect.php");

$showDataQuery="Select * from my_users";
$runDataQuery =mysqli_query($connect,$showDataQuery);

if($runDataQuery == true)
{

   while($myData = mysqli_fetch_array($runDataQuery)){ ?>

   <tr>

<td><?php echo $myData["fname"]; ?> </td>
<td><?php echo $myData["lname"]; ?> </td>
<td><?php echo $myData["email_addr"]; ?> </td>
<td><center> <img width="60px" src="avatar/<?php echo $myData['avatar'];?>" alt="" /> </center> </td>
<td><a href="edit.php?id=<?php echo $myData["edit_id"]; ?>">Edit</a> | <a onclick="return confirm('are you sure?');" href="deleteData.php?id=<?php echo $myData["id"]; ?>"> Delete</a> </td>

   </tr>




  <?php }}

 ?>
</table>

	</div>
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
