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
echo '<br>';
echo "---------------------------exercices:------------------------------------";

require_once './Book.php';

$alice = new Book('Alice au pays des merveilles', 'Lewis Carroll', 124, 1865);
$harry = new Book('Harry Potter à l\'école des sorciers', 'J . K Roling', 320, 1997);

echo '<br>';
echo $alice->read();
echo '<br>';
echo $harry->read();

echo '<br>';
echo '<br>';
echo "---------------------------test:------------------------------------";


require_once "./Film.php";

$avatar= new Film('Avatar', 'James Cameron', 2009);
$joker= new Film('Joker', 'Todd Phillips', 2019);

git $avatar->setMovie('Titanic', 2001);
espace();
echo $avatar->movie();
espace();
echo $joker->movie();












