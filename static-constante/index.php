<?php

function espace(){
    echo '<br>';
}

require_once "./SimulateurCredit.php";

// echo SimulateurCredit::CalcuTaux(50000);
// echo SimulateurCredit::TAUX;
espace();
SimulateurCredit::setQuotient(100);
echo SimulateurCredit::messageCalcul(50000);
espace();
espace();
echo "-------------------------exercice:-------------------------------";
require_once "./Mathematique.php";
espace();
echo Mathematique::division(3.67, 0);
espace();
echo Mathematique::adition(4, 68);
espace();
echo Mathematique::multiplication(59, 23);
espace();
echo Mathematique::soustraction(446, 223.78);
espace();

function test($c)
{
    if ($c == 0){
        return "no no no just not $c !!!!";
    }elseif($c == 'woou'){
        return "this $c is not bad !!!";
    }else{
        return "ohh yeah i like this $c !!!";
    }
}

echo test(0);









