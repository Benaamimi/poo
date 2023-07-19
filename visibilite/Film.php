<?php

class Film
{
    private string $title;
    private string $director;
    private int $year;


    public function movie()
    {
        return "Le film $this->title est réalisé par $this->director en $this->year.";
    }

    public function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function setMovie($title, $year)
    {
        $this->title = $title;
        $this->year = $year;
    }

    public function getmovie()
    {
        
    }

}
