<?php

session_start();
require_once("dbConnect.php");


<?php

require_once("dbConnect.php");


if(isset($_REQUEST["uname"]) && isset($_REQUEST["utype"])  && isset($_REQUEST["usr_pwd"]) )
{

$name = $_REQUEST["uname"];
$pass = $_REQUEST["usr_pwd"];
$utype =$_REQUEST["utype"];




$inserQuery = "Insert into my_admins(uName,usr_pwd,utype)VALUES('$name','$pass','$utype');";

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


<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="wrapper">
	<div id="header">
		
		<h1>Please Login</h1>
	</div>
	<div id="content">
	

	<div id="loginBoxes">

        <center>

		<form action="login_core.php">
			<h2>Login Form</h2>

			<input type="text" placeholder="Username" name="username"><br><br>
			<input type="password" placeholder="password" name="pwd"><br><br>
			<input type="submit" id="loginbutton" value="Login" name="loginBtn"><br><br>

			<?php
               
               if(isset($_REQUEST['wrong_info'])){   

              echo '<b style= "color:red;">
				 Username or password is wrong!;
			</b>';
           }
            
			?>

			
			
			
         </center>
		</form>


	</div>

	</div>
	<div id="footer">
copywrite 2020!
	</div>


	<div>
	
</body>
</html>

