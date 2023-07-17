<?php
// VISIBILITE (public, private, protected)
// public : accessible depuis l'exterieur et l'interieure de la class
// private : accessible uniqement depuis l'interieure de la class
// protected : accessible depuis l'interieure de la class et depuis les classes enfant

class Car
{
    private string $model;
    private string $color;
    private int $date;

    public function __construct($model, $color, $date)
    {
        $this->model = $model;
        $this->color = $color;
        $this->date = $date;
    }

    public function display(): string 
    {
        return "Ce vehicule est une $this->model de couleur $this->color sortie en $this->date.";
    }



    // MODEL

    // PRIVATE
    // appele la propriete private avec cette fonction getter
    public function getModel(): string
    {
        return $this->model;
    }

    
    // cette fonction permet de modifier la valeur de la propriete
    public function setModel(string $model): void //ne retourne rien 'void'
    {
        $this->model = $model;
    }

    // COLOR
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self 
    {
        $this->color = $color;
        return $this;
    }

    // DATE
  
    public function setDate( int $date): self
    {
        $this->date = $date;
        return $this;
    }
   
}