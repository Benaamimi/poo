<?php

class Conserve extends Aliment
{
    protected string $datePeremption;
    protected array $listExcipient;

    

        public function __construct(string $name, float $price, string $datePeremption, array $listExcipient)
        {
            $this->name = $name;
            $this->price = $price;
            $this->datePeremption = $datePeremption;
            $this->listExcipient = $listExcipient;
        }
    

    

   
    public function displayProduct()
    {
        return parent::displayProduct(). " et la date de peremption est le $this->datePeremption, et la date de peremption est le $this-> listExcipient.";
    }

    public function getListExcipient()
    {
       
    }

   
    public function setListExcipient($listExcipient)
    {
        $this->listExcipient = $listExcipient;

        return $this;
    }

    
}