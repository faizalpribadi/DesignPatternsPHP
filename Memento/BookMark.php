<?php
namespace DesignPatterns\Memento;

class BookMark
{
    protected $title;
    protected $page;

    public function __construct($title, $page)
    {
        $this->setPage($title);
        $this->setTitle($page);
    }

    public function setTitle(BookReader $reader)
    {
        $this->title = $reader->getTitle();
    }

    public function getTitle(BookReader $reader)
    {
        $reader->setTitle($this->title);
    }

    public function setPage(BookReader $reader)
    {
        $this->page = $reader->getPage();
    }

    public function getPage(BookReader $reader)
    {
        $reader->setPage($this->page);
    }
}
