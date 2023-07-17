<?php
require_once 'User.php';

// un objet est une instance de class.
// un objet est variable qui contient toutes les propriétés et les méthodes d'une class. 
$user = new User();
$user->firstname = 'Tarik';
$user->lastname = 'BENAAMIMI';
$user->age = 40;





echo $user->hello();
echo '<br>';
echo $user->bonjour();
echo '<br>';
echo $user->presentation();
echo '<br>';
echo $user->presentation2(40);
echo '<br>';
// où
$age = 40;
echo $user->presentation2($age);


echo '<br>';
$luckyLuck = new User(); 
$luckyLuck->firstname = 'Lucky';
$luckyLuck->lastname = 'Luke';
$luckyLuck->age = 35;
echo '<br>';
echo $luckyLuck->presentation();
echo '<br>';
echo $luckyLuck->presentation2(35);


echo '<br>';
echo "------------------------------------";
require_once 'Animal.php';
echo '<br>';
echo "exercices:";



echo '<br>';
$dog = new Animal();
$dog->name = 'snoopy';
$dog->type = 'Jack Russel';
$dog->age = 5;

echo $dog->eat();
echo '<br>';
echo $dog->sleep();
echo '<br>';


$cat = new Animal();
$cat->name = 'Felix';
$cat->type = 'Persant';
$cat->age = 3;

echo $cat->eat();
echo '<br>';
echo $cat->sleep();









