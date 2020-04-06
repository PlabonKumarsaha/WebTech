<!DOCTYPE html>
<html>
<head>
	<title>My Sql connection</title>
</head>
<body>

<form action="" method ="POST" >




<input type="text" name="searchTerm" placeholder="Type name to search"><br><br>

<input type="submit" name="searchBtn" value="search" style="border: 1px solid #ddd;background: tomato;border-radius:8px;"><br><br>


</div>
</form>

<div class ="division2" align="center">

	<?php if(isset($_REQUEST["deleted"])){

    echo "Data has been deleted!";

	} ?>


  <!-- keeping the table outside php tag but within the middle of php ,so if the isset statement is to be true then <thead>
    then only the table is shown otherise the field is emplty
  </thead>-->

  <?php
  if(isset($_REQUEST["searchTerm"])){

  $searchTerm = $_REQUEST["searchTerm"]; ?>


  <table border="1px">
  <tr>
  <td><b>First Name </b></td>
  <td><b>Last Name </b></td>
  <td><b>Email Adress</b></td>
  <td><b>Pro pic</b></td>
  <td><b>Action</b></td>



  </tr>

  <?php require_once("dbConnect.php");


  $searchDataQuery="Select * from my_users WHERE fname LIKE  '%$searchTerm%';";
  $runDataQuery =mysqli_query($connect,$searchDataQuery);

  if($runDataQuery == true)
  {

     while($myData = mysqli_fetch_array($runDataQuery)){ ?>

     <tr>

  <td><?php echo $myData["fname"]; ?> </td>
  <td><?php echo $myData["lname"]; ?> </td>
  <td><?php echo $myData["email_addr"]; ?> </td>
  <td><center> <img width="60px" src="avatar/image.png" alt="" /> <?php $myData["avatar"];?> </center> </td>
  <td><a href="edit.php?id=<?php echo $myData["edit_id"]; ?>">Edit</a> | <a onclick="return confirm('are you sure?');" href="deleteData.php?id=<?php echo $myData["id"]; ?>"> Delete</a> </td>

     </tr>




    <?php
  }}
   ?>
  </table>

<!-- keeping the table outside php tag but within the middle of php ,so if the statement is to be true then <thead>
  then only the table is shown otherise the field is emplty
</thead>-->

<?php } ?>


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
