<?php

class Animal
{
    public string $name;
    public string $type;
    public int $age;


    public function eat(): string
    {
        return "The $this->type is eating ";
    }
    public function sleep(): string
    {
        return "$this->name is sleeping ";
    }
}