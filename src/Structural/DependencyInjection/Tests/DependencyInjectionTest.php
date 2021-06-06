<?php

namespace DesignPattern\Structural\DependencyInjection\Tests;

use DesignPattern\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPattern\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

/**
 * Class DependencyInjectionTest
 * @package DesignPattern\Structural\DependencyInjection\Tests
 */
class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection(): void
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);

        self::assertSame('domnikl:1234@localhost:3306', $connection->getDsn());
    }
}