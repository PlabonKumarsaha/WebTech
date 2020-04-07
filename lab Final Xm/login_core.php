<?php


session_start();
require_once("dbConnect.php");

$userInputName = $_REQUEST['username'];
$userInputPass = $_REQUEST['pwd'];


$matchQuery = "Select * from my_admins where uName='$userInputName'AND usr_pwd='$userInputPass' from my_user";

$runquery = mysqli_query($connect,$matchQuery);

$checkout= mysqli_num_rows($runquery);


if($checkout == 1){

if($runquery == true){



if($userInputName === $dbUser &&  $userInputPass  === $dbPass)
{

	//setcookie("currentUser",$userInputName,time()+(86400*7));
	header("location: showData.php");
}
else{

	header("location: login.php?action=wrong_info");}

}

else{

header("location: login.php?action=wrong_info");

}

}


?>