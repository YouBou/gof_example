<?php

namespace DesignPattern\Behavioral\Iterator;

use Countable;
use Iterator;

/**
 * Class BookList
 * @package DesignPattern\Behavioral\Iterator
 */
class BookList implements Countable, Iterator
{
    /** @var Book[] $books */
    private array $books = [];
    private int $currentIndex = 0;

    /**
     * @param Book $book
     */
    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    /**
     * @param Book $bookToRemove
     */
    public function removeBook(Book $bookToRemove): void
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
    }

    /**
     * @return int
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->books);
    }

    /**
     * @return Book
     * @inheritDoc
     */
    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }

    /**
     * @return int
     * @inheritDoc
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    /**
     * @inheritDoc
     */
    public function next(): void
    {
        $this->currentIndex++;
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        $this->currentIndex = 0;
    }

    /**
     * @return bool
     * @inheritDoc
     */
    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }
}
