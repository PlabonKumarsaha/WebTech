<?php

class User{

public $age = 0;
public $name;
public $password;
public function __construct($name,$age){
$this->name = $name;
echo "name :".$name. "<br>";
$this->age = $age;
}

public function getAge()
{
echo "Age : " . $this->age;
}

public function getPass($hint)
{
if($hint == 'getit')
{
return $this->password;
}
else{
return 'wrong pass';
}

}


}

$PKS = new User("pks",21);
$PKS->getAge();

echo $PKS->getPass('getit');

?>