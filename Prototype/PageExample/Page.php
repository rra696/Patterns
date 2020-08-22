<?php
namespace Patterns\Prototype\PageExample;

class Page
{
    private $title;
    private $body;
    private $author;
    private $comments = [];
    private $date;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    public function __clone()
    {
        $this->title = $this->title." (copy).";
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime();
    }
}