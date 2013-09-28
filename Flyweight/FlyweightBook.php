<?php
namespace DesignPatterns\Flyweight;

class FlyweightBook
{
    protected $author;
    protected $title;

    public function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}