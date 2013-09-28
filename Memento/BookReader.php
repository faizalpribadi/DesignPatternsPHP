<?php
namespace DesignPatterns\Memento;

class BookReader
{
    protected $title;
    protected $page;

    public function __construct($title, $page)
    {

    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}