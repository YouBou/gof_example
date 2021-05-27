<?php

namespace DesignPattern\Prototype\Tests;

use DesignPattern\Prototype\BarBookPrototype;
use DesignPattern\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

/**
 * Class PrototypeTest
 * @package DesignPattern\Prototype\Tests
 */
class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            self::assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            self::assertInstanceOf(BarBookPrototype::class, $book);
         }
    }
}