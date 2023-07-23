<?php 
namespace App\namespace;


abstract class Vehicule
{
    protected int $nbTest = 100;
    protected int $car;
    protected int $car2;

    // final permet d'interdire au enfant de la redifinir
    final public function demarrer()
    {
        return "je suis démarré!";
    }

    abstract public function carburant();//cette fonction s'apelle `signature`

    public function nbTest()
    {
        return $this->nbTest;
    }

    public function car()
    {
        return "Peugeot";
    }

    public function car2()
    {
        return "Renault";
    }

  
    public function getNbTest()
    {
        return $this->nbTest;
    }

  
    public function setNbTest($nbTest)
    {
        $this->nbTest = $nbTest;

        return $this;
    }

    /**
     * Get the value of car
     */ 
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set the value of car
     *
     * @return  self
     */ 
    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get the value of car2
     */ 
    public function getCar2()
    {
        return $this->car2;
    }
}
