<style>
  @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400&family=Montserrat:ital,wght@0,400;0,700;1,100&family=Playfair+Display:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap');
</style>
<body style="background-color: #1A1A1A; color: #FFFEF2; font-family:'Fira Code' , monospace; font-size: 16px ">
  
</body>
<?php


spl_autoload_register(function ($a) {
  $a = substr($a, 14);
  require_once $a . '.php';
});




use App\namespace\Renault;
use App\namespace\peugeot;
use App\namespace\user;


// Exercice :

// Toutes nos classes seront dans des namespace avec la logique que nous venont de voir


// Créez une classe abstraite `Vehicule` avec les propriétés et méthodes suivantes :
//    - Propriété protégée `$nbTest` initialisée à 100.
//    - Méthode publique `demarrer()` qui retourne la chaîne "Je suis démarré".
//         Interdissez le polymorphisme sur cette method.
//    - Méthode abstraite publique `carburant()` qui n'a pas d'implémentation.
//    - Méthode publique `nbTest()` qui retourne la valeur de la propriété `$nbTest`.

// Créez une classe `Renault` qui hérite de `Vehicule` avec les propriétés et méthodes suivantes :
//    - Propriété privée `$carburant`.
//    - Redéfinissez la méthode `carburant()` pour qu'elle retourne la chaîne "diesel".
    $renault = new Renault("diesel");
    echo $renault->demarrer();
    echo $renault->carburant();
    //    - Redéfinissez la méthode `nbTest()` pour qu'elle retourne la valeur de `nbTest()` de la classe parente (`Vehicule`) augmentée de 30.
    echo $renault->nbTest();
    echo '<br>';
//    Creez une class `User` avec les propriétés et méthodes suivantes :
//    - Propriété `$pseudo`.
//     Interdire l'heritage sur cette class `User`;

// Créez une classe `Peugeot` qui hérite de `Vehicule` avec les propriétés et méthodes suivantes :
//    - Propriété privée `$carburant`.
//    - Redéfinissez la méthode `carburant()` pour qu'elle retourne la chaîne "essence".
$peugeot = new Peugeot();
echo $peugeot->demarrer();
echo $peugeot->Carburant();
//    - Redéfinissez la méthode `nbTest()` pour qu'elle retourne la valeur de `nbTest()` de la classe parente (`Vehicule`) augmentée de 70.
echo $peugeot->nbTest();



// Créez des instances des classes `Renault` et `Peugeot`.

// Affichez le résultat en utilisant des `echo` pour afficher :
//    - Le message retourné par la méthode `demarrer()` pour chaque véhicule.
//    - Le carburant de chaque véhicule en utilisant la méthode `carburant()`.
//    - Le nombre de tests effectués pour chaque véhicule en utilisant la méthode `nbTest()`.
echo '<br>';
$franck = new User('Franck');
echo $renault->start($franck);
echo '<br>';
echo $peugeot->start($franck);
echo '<br>';

$jorge = new User('Jorge');
echo $renault->delete($jorge);



