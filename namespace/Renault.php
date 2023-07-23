<?php

namespace App\namespace;

class Renault extends Vehicule 
{
    private string $carburant;

    public function carburant()
    {
        return $this->getCarburant();
    }

    public function nbTest()
    {
        return " ".parent::nbTest() + 30;
    }

    

    public function __construct(string $carburant)
    {
        $this->carburant = $carburant;
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

    public function start(User $user)
    {
        return $user->getpseudo(). ' demarre '. parent::car();
    }

    public function delete(User $name)
    {
        return $name->getPseudo()." c'est désabonné de ". parent::car2();
    }
}