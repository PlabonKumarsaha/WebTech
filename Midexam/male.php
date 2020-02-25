<?php
  session_start();
  if(!(isset($_SESSION['genmale']))) {
    header("Location: index.php");
	  
  }
  
  if(!(isset($_SESSION['maleID']))) {
    header("Location: index.php");
  }

  echo "Welcome , " . $_SESSION['maleID'];
  
   $co = "0";
  $moneyCri = $moneySwi =  $moneyBas = "";
  $total = "";
  $err = "";
  
  
   if($_SERVER["REQUEST_METHOD"] == "POST"){
	   
	   
    if(empty($_POST['cricket'])){
		
	}
      
    else{
      $moneyCri = 200;
	$co =$co +1;
    }
	
	if(empty($_POST['Swimming'])){
      
    }
    else{
      $moneySwi = 100;
	$co =$co +1;
    }
	
	if(empty($_POST['Basketball'])){
      
    }
    else{
      $moneyBas = 150;
	 $co =$co +1;
    }
	
	if($co == 3)
	{
	$err = "Can not select more then two sports";	
	}
	else{
	$total = $moneyCri+$moneySwi+$moneyBas;
	$_SESSION['totalmoneyMale'] = $total;
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
	  <form class="" action="male.php" method="post">
  <input type="checkbox" id="cricket" name="cricket" value="">
  <label for="cricket"> cricket(200 BDT)</label><br>
  
  <input type="checkbox" id="Swimming " name="Swimming " value="">
  <label for="Swimming"> Swimming(100 BDT)</label><br>
  
  <input type="checkbox" id="Basketball " name="Basketball " value="">
  <label for="Basketball "> Basketball(150 BDT) </label><br><br>
  <input type="submit" value="Submit">
  <?php echo $err; ?>
  

</form>
  
  </body>
  
  </html>
