<?php

namespace DesignPattern\Generate\Prototype\Tests;

use DesignPattern\Generate\Prototype\BarBookPrototype;
use DesignPattern\Generate\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

/**
 * Class PrototypeTest
 * @package DesignPattern\Generate\Prototype\Tests
 */
class PrototypeTest extends TestCase
{
    public function testCanGetFooBook(): void
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