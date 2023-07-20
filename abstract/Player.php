<?php

class Player 
{
    protected string $name;
    protected int $life = 100;
    protected int $score = 0;

    public function __construct(string $name)
    {
        $this->name = $name;    
    }

    public function hit(){
        $this->life = $this->life - 10;
    }
    
    public function hit2(){
        return $this->name. $this->life - 10;
    }
 
    public function getName()
    {
        return $this->name;
    }

    
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getLife()
    {
        return $this->life;
    }


    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

   
    public function getScore()
    {
        return $this->score;
    }

   
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }
}


