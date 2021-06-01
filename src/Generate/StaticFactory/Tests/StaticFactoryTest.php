<?php

namespace DesignPattern\Generate\StaticFactory\Tests;

use DesignPattern\Generate\StaticFactory\StaticFactory;
use DesignPattern\Generate\StaticFactory\FormatString;
use DesignPattern\Generate\StaticFactory\FormatNumber;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

/**
 * Class StaticFactoryTest
 * @package DesignPattern\Generate\StaticFactory\Tests
 */
class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter(): void
    {
        self::assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter(): void
    {
        self::assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}