<?php

require 'Employee.php';

$person = new Employee();
$person->name='Вася';
$person->age='25';
$person->salary='1000';

$person2 =new Employee();
$person2->name='Петя';
$person2->age='30';
$person2->salary= '2000';

echo $person->salary+$person2->salary;
?>