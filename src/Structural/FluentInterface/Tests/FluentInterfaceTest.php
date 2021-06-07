<?php

namespace DesignPattern\Structural\FluentInterface\Tests;

use DesignPattern\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

/**
 * Class FluentInterfaceTest
 * @package DesignPattern\Structural\FluentInterface\Tests
 */
class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL(): void
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        self::assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
