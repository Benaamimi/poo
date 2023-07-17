<?php
require_once './Car.php';

$car1 = new Car('bmw', 'noir', '2017');
$car2 = new Car('honda', 'blanche', '2003');

echo $car1->display();
echo '<br>';
echo $car2->display();

echo '<br>';
echo "--------------------------------------------------------------";
echo '<br>';
echo "exercices:";
require_once './Book.php';

$alice = new Book('Alice au pays des merveilles', 'Lewis Carroll', 124, 1865);
$harry = new Book('Harry Potter à l\'école des sorciers', 'J . K Roling', 320, 1997);

echo '<br>';
echo $alice->read();
echo '<br>';
echo $harry->read();









