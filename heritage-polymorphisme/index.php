<h2>EXERCICE:</h2>

<?php

require_once "./Article.php";
require_once "./Aliment.php";
require_once "./Conserve.php";

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

echo '---------------Conserve-------------------';
$sardine = new Conserve('Sardine', 4.99, '11/07/2030', ['E-210', 'F-024']);

echo '<br>';
echo $sardine->displayProduct();
echo '<br>';
echo '<br>';
echo '-------apelle un tableau private avec implode-----';
echo '<br>';
echo implode(' & ',$sardine->getListExcipient());
echo '<br>';
echo '<br>';
echo '-------methode foreach du tableau-----';
echo '<br>';
foreach($sardine->getListExcipient() as $conservateur){
    echo $conservateur.'<br>'; 
}





