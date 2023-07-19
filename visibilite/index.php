<?php
require_once './Car.php';

$car1 = new Car('bmw', 'noir', '2017');
$car2 = new Car('honda', 'blanche', '2003');

echo $car1->display();
espace();
echo $car2->display();

function espace(){
    echo '<br>';
}







espace();
espace();
echo "---------------------------exercices:------------------------------------";

require_once './Book.php';

$alice = new Book('Alice au pays des merveilles', 'Lewis Carroll', 124, 1865);
$harry = new Book('Harry Potter à l\'école des sorciers', 'J . K Roling', 320, 1997);

$alice->setLivre("l'Alchimiste", "Paolo Coelio");
espace();
echo $alice->getLivre();
espace();
echo $alice->read();
espace();
echo $harry->read();
espace();
echo $harry->getLivre();

echo '<pre>';
var_dump($harry);
echo '</pre>';






espace();
espace();
echo "---------------------------exercice 2:------------------------------------";


require_once "./Film.php";

$avatar= new Film('Avatar', 'James Cameron', 2009);
$joker= new Film('Joker', 'Todd Phillips', 2019);

// $avatar->setMovie('Titanic', 2001);
espace();
echo $avatar->movie();
espace();
echo $joker->movie();












