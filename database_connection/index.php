<!DOCTYPE html>
<html>
<head>
	<title>My Sql connection</title>
</head>
<body>

<form action="Data.php" method ="POST">




	<div  align="center" >

			<?php
if(isset($_REQUEST['action'])){

if($_REQUEST["action"] == "true"){

	echo "<font color='green'>data inserted!</font>";
}else{

	echo "<font color='red'>data not inserted!</font>";
}

}  ?>

<input type="text" name="fname" placeholder="First name"><br><br>
<input type="text" name="lname" placeholder="Last name"><br><br>
<input type="email" name="email_addr" placeholder="Mailing adress"><br><br>
<input type="password" name="usr_pwd" placeholder="Password"><br><br>
<input type="submit" name="submitBtn" value="Save Data"><br><br>

</div>
</form>
</body>
</html>


<style type="text/css">
	
div {
  padding: 135px;
  font-size: 25px;
}

</style>