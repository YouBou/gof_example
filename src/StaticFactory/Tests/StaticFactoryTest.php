<?php

namespace DesignPattern\StaticFactory\Tests;

use DesignPattern\StaticFactory\StaticFactory;
use DesignPattern\StaticFactory\FormatString;
use DesignPattern\StaticFactory\FormatNumber;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

/**
 * Class StaticFactoryTest
 * @package DesignPattern\StaticFactory\Tests
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