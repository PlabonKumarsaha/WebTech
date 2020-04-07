<!DOCTYPE html>
<html>
<head>
	<title>My Sql connection</title>
</head>
<body>

<form action="Data.php" method ="POST" enctype="multipart/form-data">




	<div  align="center" >
	
	<h1 align="center">All datas are shown here! </h1>

			<?php
if(isset($_REQUEST['action'])){

if($_REQUEST["action"] == "true"){

	echo "<font color='green'>data inserted!</font> <br>";
}else{

	echo "<font color='red'>data not inserted!</font><br>";
}

}  ?>

<input type="text" name="uName" placeholder="Add name"><br><br>
<input type="password" name="usr_pwd" placeholder="Password"><br><br>
<input type="text" name="utype" placeholder="User  Type"><br><br>
<input type="submit" name="submitBtn" value="Add Admin"><br><br>


</div>
</form>

<div class ="division2" align="center">

<h1>Admin data</h1>
<table border="1px">
<tr>
<td><b>Name </b></td>
<td><b>Password </b></td>
<td><b>Type </b></td>
<td><b>Action</b></td>



</tr>

<?php require_once("dbConnect.php");

$showDataQuery="Select * from my_admins";
$runDataQuery =mysqli_query($connect,$showDataQuery);

if($runDataQuery == true)
{

   while($myData = mysqli_fetch_array($runDataQuery)){ ?>

   <tr>

<td><?php echo $myData["uName"]; ?> </td>
<td><?php echo $myData["usr_pwd"]; ?> </td>
<td><?php echo $myData["utype"]; ?> </td>
<td><a onclick="return confirm('are you sure?');" href="edit.php?id=<?php echo $myData["edit_id"]; ?>">suspand permit</a> | <a onclick="return confirm('are you sure?');" href="revive.php?id=<?php echo $myData["id"]; ?>"> Revive permit</a> </td>

   </tr>




  <?php }}

 ?>
</table>

	</div>
	
	
	
	<!-- show user data! -->
	
	<div class ="division3" align="center">
	
	<h1>User data</h1>


<table border="1px">
<tr>
<td><b> USer Name </b></td>
<td><b> user Password </b></td>
<td><b> user Type </b></td>
<td><b> user Permit </b></td>

<td><b>Action</b></td>



</tr>

<?php require_once("dbConnect.php");

$showDataQuery1="Select * from my_users";
$runDataQuery1 =mysqli_query($connect,$showDataQuery1);

if($runDataQuery1 == true)
{

   while($myData = mysqli_fetch_array($runDataQuery1)){ ?>

   <tr>

<td><?php echo $myData["UserName "]; ?> </td>
<td><?php echo $myData["Password"]; ?> </td>
<td><?php echo $myData["utype"]; ?> </td>
<td><?php echo $myData["permit"]; ?> </td>

<td><a onclick="return confirm('are you sure?');" href="edit.php?id=<?php echo $myData["edit_id"]; ?>">suspand permit</a> | <a onclick="return confirm('are you sure?');" href="revive.php?id=<?php echo $myData["revive_id"]; ?>"> Revive permit</a> </td>

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
