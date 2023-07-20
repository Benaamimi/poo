<?php
require_once "./Player.php";
require_once "./Warrior.php";
require_once "./Mage.php";

$jack = new Player('Jack ');
echo $jack->hit2();
echo $jack->getName();
echo $jack->getLife();
$jack->hit();
echo $jack->getLife();

echo '<br>';
$snake = new Warrior( 'snake',2);
echo $snake->hit2();
echo $snake->getName();
$snake->hit();
echo $snake->getLife();

echo '<br>';
$witcher = new Mage('Gerald ',2);
echo $witcher->hit2();
$witcher->hit();
echo $witcher->getName();
echo $witcher->getLife();



