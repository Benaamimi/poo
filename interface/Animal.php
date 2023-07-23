<?php

namespace App\interface;


class Animal
{
    protected string $name;
    protected int $age;
    protected int $nbPatte;
    protected array $listAliment;


    

    public function __construct(string $name, int $age, int $nbPatte, array $listAliment,)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nbPatte = $nbPatte;
        $this->listAliment = $listAliment;
        
    }


    public function getName()
    {
        return $this->name;
    }

  
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

   
    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getNbPatte()
    {
        return $this->nbPatte;
    }

    public function setNbPatte($nbPatte)
    {
        $this->nbPatte = $nbPatte;

        return $this;
    }

      
    public function getListAliment()
    {
            return $this->listAliment;
    }

      
    public function setListAliment($listAliment)
    {
            $this->listAliment = $listAliment;

            return $this;
    }
}