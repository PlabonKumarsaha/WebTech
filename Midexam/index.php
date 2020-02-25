<?php
  session_start();
  $SPhn= $Sid =$Sgender ="";
  
  $SPhnerr= $Siderr =$Sgendererr ="";
  

  $userNameDB = "uname1";
  $passDB = "1234";
  
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['s_id'])){
      $Sid = "Student id cannot be empty!";
    }
    else{
      $Sid = $_POST['s_id'];
    }
	
	if(empty($_POST['gender'])){
      $Sgendererr = "Student Gender cannot be empty!";
    }
    else{
      $Sgender = $_POST['gender'];
    }
	
	if(empty($_POST['phn'])){
      $SPhnerr = "Student Phone no cannot be empty!";
    }
    else{
      $SPhn = $_POST['phn'];
    }
	
	 if($Sgender === "male"){
        $_SESSION['genmale'] = "male";
		$_SESSION['maleID'] = $Sid;
		
        header("Location: male.php");
      }
      elseif($Sgender === "female"){
        $_SESSION['genFemale'] = "female";
		$_SESSION['femaleID'] = $Sid;
        header("Location: female.php");
      }
	
	
   }
  
?>



<html>
  <head>
    
    <title>Personal Info</title>
  </head>
  
  
  <body>
  <form class="" action="index.php" method="post">
   <label for="s_id">Student id: </label>
      <input type="text" name="s_id" value="" required>
	  <span style="color:red;"><?php echo $Sid; ?></span> <br>
	  <br>
	  
	   <label for="gender">Gender: </label>
	   <input type="radio" name="gender" value="male" required>Male
	  <input type="radio" name="gender" value="female"  >Female
	   <span style="color:red;"><?php echo $Sgendererr; ?></span> 
	   
	   <br>
	  
	  
	  <label for="phn">Phone no: </label>
      <input type="text" name="phn" value="" required>
	  <span style="color:red;"><?php echo $SPhnerr; ?></span> 
	  <br>
	  <br>
	  <input type="submit" name="Continue_btn" value="Continue">
      
    </form>
  
  </body>
  
  </html>
  
  
  
  