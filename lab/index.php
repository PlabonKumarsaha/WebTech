<?php
 
$fchicken = $fburger = $salad = "";
$fchickenerr = $fburgererr = $saladerr = "";
$fchickenpri = $fburgerpri = $saladepri = "";
$totalPrice = "";






if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($_POST['Fchicken']) and empty($_POST['Dburger']) ){
      $fchickenerr = "Must choose atleast any of other two items !";
    }
    else{
      $fchicken = $_POST['Fchicken'];
	  
	  if($fchicken >= 3)
	  {
	  fchickenpri = fchicken*.8*150;
	  }
	  else{
	   fchickenpri = fchicken*150;
	  }
    }
	
	if(empty($_POST['Fchicken']) and empty($_POST['Salad']) ){
      $fburgererr = "Must choose atleast any of other two items !";
    }
    else{
      $fburger = $_POST['Dburger'];
	  
	  if($fburger >= 3)
	  {
	  $fburgerpri = fburger*.8*250;
	  }
	  else{
	  $fburgerpri = fburger*250;
	  }
    }
	
		if(empty($_POST['Fchicken']) and empty($_POST['Dburger']) ){
      $saladerr = "Must choose atleast any of other two items !";
    }
    else{
      $salad = $_POST['Salad'];
	  
	  if($salad >= 3)
	  {
	  $saladepri = salad*.8*50;
	  }
	  else{
	  $saladepri = salad*50;
	  }
    }
	
	totalPrice = fchickenpri+fburgerpri+saladepri;
	
}

?>


<html>
  <head>
    <title>Registration Form</title>
  </head>
  <body>
    <form action="index.php" method="post">
	
	<fieldset>
	
	
	<label><b>All items</b></label>
	</br>
	
	<label for="Fchicken">a) Fried Chicken  => Price: 150</label>
	<input type="number" name="Fchicken" value=""> <span style="color:red;"> <?php echo $fchickenerr; ?> </span>
	</br>
	<label for = "Dburger">b) Double Cheese Burger => Price: 250</label>
	<input type="number" name="Dburger" value=""> <span style="color:red;"> <?php echo $fburgererr; ?> </span>
	</br>
	<label for = "Salad">c) Salad => Price: 50</label>
	<input type="number" name="Salad" value=""> <span style="color:red;"> <?php echo $saladerr; ?> </span>
	
	
	</fieldset>
	
	
	      <input type="submit" name="Calculate" value="Calculate">
		  
		  
		  <h1>Total Money :</h1>
    <?php

      echo $totalPrice "<br>";
    
    ?>
	
	</body>
	</html>