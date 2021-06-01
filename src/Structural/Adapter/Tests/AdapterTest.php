<?php

namespace DesignPattern\Structural\Adapter\Tests;

use DesignPattern\Structural\Adapter\EBookAdapter;
use DesignPattern\Structural\Adapter\Kindle;
use DesignPattern\Structural\Adapter\PaperBook;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest
 * @package DesignPattern\Structural\Adapter\Tests
 */
class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook(): void
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        self::assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook(): void
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        self::assertSame(2, $book->getPage());
    }
}