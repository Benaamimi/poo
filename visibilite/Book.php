<?php
class Book
{
    private string $title;
    private string $author;
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

    // TITLE GETTER SETTER
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    // AUTHOR GETTER SETTER
    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }
 
}