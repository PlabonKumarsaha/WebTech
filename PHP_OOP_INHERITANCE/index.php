
<?php

include('User.php');

$user1 = new Member("pks","pks@gmail.com",'Nov 15');

echo $user1 ->getType();

echo "<br>";

$user2 = new Admin("abc","abc@gmail.com",2);

echo $user2 ->getType();

?>

