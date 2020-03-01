<?php
class User{
public $name;
public $email;
public function __construct($name,$email){
$this->name = $name;
//echo "name :".$name. "<br>";
$this->email = $email;
}

public function getType()
{
return $this->type;
}

}

class Admin extends User{

public $permissionlevel;
public $type = "Admin";
public function __construct($name,$email,$permissionlevel)
{
parent:: __construct($name,$email);
$this->permissionlevel = $permissionlevel;
}
public function getType()
{
	return "hello from " . parent::getType();
}

}

 class Member extends User{

public $dateAdded;
public $type = "Member";
public function __construct($name,$email,$dateAdded)
{
parent:: __construct($name,$email);
$this->dateAdded = $dateAdded;
}
}

?>