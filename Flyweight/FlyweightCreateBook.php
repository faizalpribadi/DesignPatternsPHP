<?php
namespace DesignPatterns\Flyweight;

class FlyweightCreateBook
{
    protected $books = array();

    public function addBook($book)
    {
        $this->books[] = $book;
    }

    public function showBooks()
    {
        foreach ($this->books as $book) {
            $bookList = 'author' . $book->getAuthor() . '-' . 'title' . $book->getTitle();
        }

        return $bookList;
    }
}
