<?php

class Warrior extends Player
{
    private int $arrow;
    

    public function __construct(string $name, int $arrow)
    {
        $this->name = $name;
        $this->arrow = $arrow;
    }

    public function hit2()
    {
        return $this->name. $this->life - $this->arrow * 15;
    }

    public function hit()
    {
        $this->life = $this->life - 15;
    }


    public function getArrow()
    {
        return $this->arrow;
    }

    public function setArrow($arrow)
    {
        $this->arrow = $arrow;

        return $this;
    }
}