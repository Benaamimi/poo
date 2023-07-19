<?php

class Aliment extends Article
{
    private string $datePeremption;

    public function __construct(string $name, float $price, string $datePeremption)
    {
        $this->name = $name;
        $this->price = $price;
        $this->datePeremption = $datePeremption;
    }



    public function getdatePeremption(): string
    {
        return $this->datePeremption;
    }

   


    public function displayProduct()
    {
        return parent::displayProduct() .' '. "et la date de peremption est le $this->datePeremption .";
    }

  
}