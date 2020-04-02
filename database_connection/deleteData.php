<?php

require_once("dbConnect.php");

 $getID =  $_REQUEST["id"];
$deleteQuery = "Delete from  my_users where  id = $getID";
$runDeleteQuery = mysqli_query($connect,$deleteQuery);

if($runDeleteQuery == true){

	header("location: index.php?deleted");
}else{


}


?>