<?php

class Conserve extends Aliment
{
    private array $listExcipient;
    
    
    
    public function __construct(string $name, float $price, string $datePeremption, array $listExcipient)
    {
        parent::__construct($name, $price, $datePeremption);
        $this->listExcipient = $listExcipient;
    }

    public function displayProduct()
    {
        $listeTableau = implode(' et ',$this->listExcipient);
        return parent::displayProduct(). " et la date de peremption est le $this->datePeremption, et la date de peremption est le $listeTableau.";
    }
    
    
    
    
    public function getListExcipient(): array
    {
       return $this->listExcipient;
    }

   
    public function setListExcipient($listExcipient)
    {
        $this->listExcipient = $listExcipient;

        return $this;
    }

    
}