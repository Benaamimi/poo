<?php
class Book
{
    public string $title;
    public string $author;
    public int $pages;
    public int $year;

    public function __construct($title, $author, $pages, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->year = $year;
    }

    public function read()
    {
        return "je lis $this->title écrit par $this->author.";
    }

  

}