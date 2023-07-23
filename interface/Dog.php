<?php
namespace App\interface;

require_once "./SavageAnimal.php";


class Dog extends Animal implements SavageAnimal
{
    
    public function devore()
    {
        
        return "je vien de devorer un animal ";
    }
    
    
    
    public function getEat(){}
    
    protected string $pedigree;
    
    public function __construct(string $name, int $age, string $pedigree, array $listAliment)
    {
        $this->name = $name;
        $this->age = $age;
        $this->pedigree = $pedigree;
        $this->listAliment = $listAliment;
    }

    public function eatSomeThing(Bird $oiseau)
    {
        return $this->name ." a devoré ".$oiseau->getName();
        
    }
    
    public function description()
    {
        $Aliment = implode(' et ',$this->listAliment);
        return "je m'apelle $this->name et j'ai  ". $this->age. " ans et mon pedigree est de ".$this->pedigree." et je mange $Aliment .";
    }


    public function getPedigree()
    {
        return $this->pedigree;
    }


    public function setPedigree($pedigree)
    {
        $this->pedigree = $pedigree;

        return $this;
    }
}