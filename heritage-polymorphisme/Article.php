<?php

class Article 
{
    protected string $name;
    protected float $price;
    


    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
        
    }

    public function displayProduct()
    {
        return "Le produit est une $this->name elle $this->price";
    }
// ---------------------name---------------------------
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
// -------------------price---------------------------
    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    
}