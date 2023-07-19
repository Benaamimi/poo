<h2>EXERCICE:</h2>

<?php

require_once "./Article.php";
require_once "./Aliment.php";

echo '---------------Aliment-------------------';
echo '<br>';
$cookie = new Aliment('cookie', 2.99, '11/07/2030');
echo $cookie->displayProduct();


echo '<br>';
echo '<br>';
echo '---------------Article-------------------';
echo '<br>';
$casquette = new Article('Casquette', 29.99);
echo $casquette->displayProduct();

echo '<br>';
echo '<br>';


$sardine = new Conserve('Sardine', 4.99, '11/07/2030', []);
echo $sardine->displayProduct();
echo '<br>';
echo '<br>';

var_dump($sardine);


