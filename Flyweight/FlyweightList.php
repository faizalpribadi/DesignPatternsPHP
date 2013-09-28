<?php
namespace DesignPatterns\Flyweight;

class FlyweightList
{
    protected $books;

    public function __construct()
    {
        $this->books = array(
            'one'   => null,
            'two'   => null,
            'three' => null,
        );
    }

    public function getBook($book)
    {
        if (null === $this->books[$book]) {
            $makeNewBook = (string) 'makeBook'.$book;
            $this->books[$book] = $this->$makeNewBook;
        }

        if (isset($this->books[$book])) {
            return $this->books[$book];
        }
    }

    public function makeBookOne()
    {
        $book = new FlyweightBook('John', 'Book Of PHP');

        return $book;
    }

    public function makeBookTwo()
    {
        $book = new FlyweightBook('Marissa', 'Build Software Quality');

        return $book;
    }

    public function makeBookThree()
    {
        $book = new FlyweightBook('Ical', 'Design Patterns Of PHP');

        return $book;
    }
}