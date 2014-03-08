<?php
class Person{

public $myName;
public $writeName2;

function __construct($myName , $writeName2){
$this->myName = $myName;
$this->writeName2 = $writeName2;

}

function myName(){
return $this->myName;
}

function writeName2(){
return $this->writeName2;
}
function about(){
$myName	   = $this->myName();
$writeName2   = $this->writeName2();
return "My name is $myName $writeName2";
}
function aboutHim(){
$myName	   = $this->myName();
$writeName2   = $this->writeName2();
return "My brother's name is $myName $writeName2";
}
}

$Person = new Person("Peter" , "Pan");
$Person2 = new Person("Jeff" , "Jack");

echo ($Person->about());
echo '<br>';
echo ($Person2->aboutHim());

?>