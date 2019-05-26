<?php
class Employee {
    public $name;
    public $age;
    public $salary;
  //  public function getName(){
  //      return $this->name;
 //   }
//print($Employee->name);
    public function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }

}






?>