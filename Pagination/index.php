<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pagination";

$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
  die('Connection Error: ' . mysqli_connect_error());
}
mysqli_query($con,$dbname);

$results_per_page = 3;
$sql= "SELECT * FROM alphabets";
$result =mysqli_query($con,$sql);
echo $number_of_results =mysqli_num_rows($result);


//while($row =mysql_fetch_array($result){
//echo $row['id']. ' ' .$row['alphabets'] . '<br>';

//}
//total no of pages

 $number_of_pages = ciel($number_of_results/$results_per_page);

//determine which page on are we in
if(!isset($_GET['page'])){

$page =1;
}
else
{

	$page = $_GET['page'];
}

//determine the SQL limit

//starting result number
$this_page_first_result =($page-1)*$results_per_page;

$sql ="SELECT * FROM alphabets LIMIT". $this_page_first_result.','.$results_per_page;

$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result) {
	
	echo $row['id']. ' ' .$row['alphabets'] . '<br>';
}


for($page =1;$page<=$number_of_pages;$page++)
{

	echo '<a href="index.php?page='.$page.'">'. $page .'<a>';
}
?>

</body>
</html>
