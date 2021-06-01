<?php

namespace DesignPattern\Generate\Singleton\Tests;

use PHPUnit\Framework\TestCase;
use DesignPattern\Generate\Singleton\Singleton;

/**
 * Class SingletonTest
 * @package DesignPattern\Generate\Singleton\Tests
 */
class SingletonTest extends TestCase
{
    public function testUniqueness(): void
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        self::assertInstanceOf(Singleton::class, $firstCall);
        self::assertSame($firstCall, $secondCall);
    }
}