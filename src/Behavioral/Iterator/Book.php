<?php

namespace DesignPattern\Behavioral\Iterator;

/**
 * Class Book
 * @package DesignPattern\Behavioral\Iterator
 */
class Book
{
    private string $title;
    private string $author;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     */
    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthorAndTitle(): string
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
