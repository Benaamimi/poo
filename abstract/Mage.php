<?php
class Mage extends Player
{
    private int $mana;
    

    public function __construct(string $name, int $mana)
    {
        $this->name = $name;
        $this->mana = $mana;
    }

    public function hit2()
    {
            return $this->name. $this->life - $this->mana * 30;
    }

    public function hit()
    {
            return $this->life = $this->life - 30;
    }



    public function getMana()
    {
        return $this->mana;
    }

    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }
}