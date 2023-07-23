<?php
namespace App\namespace;

final class User extends Vehicule
{
    protected string $pseudo;

    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function carburant(){}

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }
}
