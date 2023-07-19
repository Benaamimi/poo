<?php
/**
 * [Description Book]
 */
class Book
{
    private string $title;
    private string $author;
    public int $pages;
    public int $year;

    // '__construct' est une méthode magique
    public function __construct($title, $author, $pages, $year)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->year = $year;
    }

    /**
     * [Description for read]
     *
     * @return [type]
     * 
     */
    public function read()
    {
        return "je lis $this->title écrit par $this->author.";
    }

    public function getLivre(): string
    {
        return $this->title;
    }

    /**
     * [comme un mini constructor pour rapeller les modidif]
     *
     * @param string $author
     * 
     * @return self
     * 
     */
    public function setLivre($title, $author)
    {
        $this->title = $title;
        $this->author = $author;  
    }
 
}