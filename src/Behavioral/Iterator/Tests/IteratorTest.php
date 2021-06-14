<?php

namespace DesignPattern\Behavioral\Iterator\Tests;

use DesignPattern\Behavioral\Iterator\BookList;
use DesignPattern\Behavioral\Iterator\Book;
use PHPUnit\Framework\TestCase;

/**
 * Class IteratorTest
 * @package DesignPattern\Behavioral\Iterator\Tests
 */
class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList(): void
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
        $bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        self::assertSame(
            [
                'Learning PHP Design Patterns by William Sanders',
                'Professional Php Design Patterns by Aaron Saray',
                'Clean Code by Robert C. Martin',
            ],
            $books
        );
    }

    public function testCanIterateOverBookListAfterRemovingBook(): void
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $book2 = new Book('Professional Php Design Patterns', 'Aaron Saray');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);
        $bookList->removeBook($book);

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        self::assertSame(
            [
                'Professional Php Design Patterns by Aaron Saray'
            ],
            $books
        );
    }

    public function testCanAndBookToList(): void
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);

        self::assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList(): void
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        self::assertCount(0, $bookList);
    }
}