<?php
namespace App\namespace;


class Peugeot extends Vehicule implements Engine
{
    private $carburant;

    public function carburant()
    {
        return "essence";
        
    }

   

    public function nbTest()
    {
        return " ".$this->getNbTest() + 70;
    }


    public function getCarburant()
    {
        return $this->carburant;
    }

  
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function start(User $name)
    {
        return $name->getPseudo(). ' demarre le vehicule ';
    }
}


