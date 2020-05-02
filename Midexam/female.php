<?php
  session_start();


  if(!(isset($_SESSION['genFemale']))) {
    header("Location: index.php");
  }
  if(!(isset($_SESSION['femaleID']))) {
    header("Location: index.php");
  }
  echo "Welcome, " . $_SESSION['femaleID'];
  
      $co = 0;
  $moneyCri = $moneyHand =  $moneyBas = "";
  $total = "";
  $err = "";
  
  
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['cricket'])){
      
    }
    else{
      $moneyCri = 200;
	 $co =$co +1;
    }
	
	if(empty($_POST['Handball'])){
      
    }
    else{
      $moneyHand = 50;
	 $co =$co +1;
    }
	
	if(empty($_POST['Basketball'])){
      
    }
    else{
      $moneyBas = 150;
	 $co =$co +1;
    }
	if($co == "3")
	{
	$err = "Can not select more then two sports";	
	}
	else{
	$total = $moneyCri+$moneyHand+$moneyBas;
	 $_SESSION['totalmoneyFemale'] = $total;
	 header("Location: total.php");
   }
   
   }
  
  
  
  
  
  

?>


<html >
  <head>
    
    <title>Sport(s) selection</title>
  </head>
  
  <body>
  <label for="sports"> select Sport(s): </label><br>
	  <form class="" action="female.php" method="post">
  <input type="checkbox" id="cricket" name="cricket" value="">
  <label for="cricket"> cricket(200 BDT)</label><br>
  
  <input type="checkbox" id="Handball   " name="Handball  " value="">
  <label for="Handball "> Handball (50 BDT)</label><br>
  
  <input type="checkbox" id="Basketball " name="Basketball " value="">
  <label for="Basketball "> Basketball(150 BDT) </label><br><br>
  <input type="submit" value="continueAgain">
</form>
  
  </body>
  
  </html>
