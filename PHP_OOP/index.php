
<?php

include('User.php');

$PKS = new User("pks",32);
echo $PKS ->getPass("pass");

?>

