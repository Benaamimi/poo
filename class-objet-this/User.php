<?php

class User
{
    /** 
     * @var string
    */
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    /** 
     * @var int
    */
    public int $age = 0;
    /** 
     * @var array
    */
    public array $notes;

    /** 
     * @return string
    */
    public function hello(): string //une méthode
    {
        return 'Salut tout le monde';
    }

    public function bonjour(): string
    {
        return "bonjour je m'apelle $this->firstname, $this->lastname ";
    }

    // creer une nouvelle fonction qui prendra en parametre un nombre

    public function presentation()
    {
        return "bonjour je m'apelle $this->firstname $this->lastname, et j'ai $this->age ans.";
    }

    public function presentation2(int $age): string
    {
        return  $this->bonjour() . "et j'ai $age ans.";
    }
    
}


