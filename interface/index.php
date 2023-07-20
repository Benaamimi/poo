<?php

require_once "./Animal.php";
require_once "./Dog.php";
require_once "./Bird.php";

$jack = new Dog ('Jack', 4, 'Pure race Malinois', ["Royal Cannin", "Purina One"]);
$jack->setName('Cocky');
echo $jack->description();
echo '<br>';

$pigeon = new Bird (0);
echo $pigeon->description();