<!DOCTYPE html>
<html>
<head>
	<title>PHP cookies</title>
</head>
<body>

<?php
//time() gives current time
//cokies don't forget you even after closing the brwoser

//cookie details can be found through inspect : Application>>memory>>cookies
setcookie("Username","PKS",time()+1000);
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
//echo "pks";

?>

</body>
</html>