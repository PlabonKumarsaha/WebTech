<?php

class User{

public $age = 0;
public $name;
public function __construct($name,$age){
$this->name = $name;
echo "name :".$name. "<br>";
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

