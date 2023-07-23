<?php

namespace App\interface;

class Bird extends Animal
{
    protected bool $migrate; 
   

    public function getEat(){}

    public function __construct(string $name, bool $migrate)
    {
        
        $this->name = $name;
        $this->migrate = $migrate; 
       
       
    }



    public function description()
    {
        if ($this->migrate == true){
            return "je suis un oiseau migrateur.";
        }else{
            return "pas un migrateur.";
        }
    }

    public function getMigrate()
    {
        return $this->migrate;
    }


    public function setMigrate($migrate)
    {
        $this->migrate = $migrate;

        return $this;
    }

}