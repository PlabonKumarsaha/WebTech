<?php

class User{

public $age = 0;
public function __constructor($name,$age){

echo $name;
$this->age = $age;
}

public function getAge()
{
echo "Age : " . $this->age;
}

}

$PKS = new User("pks",21);
$PKS->getAge();

?>

