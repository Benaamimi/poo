<?php

namespace App\interface;


interface SavageAnimal 
{
    // retourne je vien de devorer un animal
    public function devore();

    // retourne je viens de dévorer un xxx (nom de l'oiseau)
    public function eatSomeThing(Bird $oiseau);

    
}