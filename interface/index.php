<style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400&family=Montserrat:ital,wght@0,400;0,700;1,100&family=Playfair+Display:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap');
</style>
<body style="background-color:black; color: green; font-family:'Fira Code', monospace; font-size: 16px ">
  
</body>
<?php

require_once "./Animal.php";
require_once "./Dog.php";
require_once "./Bird.php";
require_once "./lib/Animal.php";

use \App\interface\Dog;
use \App\interface\Bird;
use \App\interface\lib\Animal;

$loup = new Animal;

$jack = new Dog ('Jack', 4, 'Pure race Malinois', ["Royal Cannin", "Purina One"]);
echo $jack->description();
echo '<br>';

$pigeon = new Bird ('kiki', 1);
echo $pigeon->description();
echo '<br>';





echo $jack->devore();
echo '<br>';
echo $jack -> eatSomeThing($pigeon);
