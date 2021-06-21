<?php

namespace DesignPattern\Behavioral\Strategy\Tests;

use DesignPattern\Behavioral\Strategy\Context;
use DesignPattern\Behavioral\Strategy\DateComparator;
use DesignPattern\Behavioral\Strategy\IdComparator;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyTest
 * @package DesignPattern\Behavioral\Strategy\Tests
 */
class StrategyTest extends TestCase
{
    /**
     * @return array[]
     */
    public function provideIntegers(): array
    {
        return [
            [
                [['id' => 2], ['id' => 1], ['id' => 3]],
                ['id' => 1],
            ],
            [
                [['id' => 3], ['id' => 2], ['id' => 1]],
                ['id' => 1],
            ],
        ];
    }

    /**
     * @return array[]
     */
    public function provideDates(): array
    {
        return [
            [
                [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
                ['date' => '2013-03-01'],
            ],
            [
                [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
                ['date' => '2013-02-01'],
            ],
        ];
    }

    /**
     * @dataProvider provideIntegers
     * @param $collection
     * @param $expected
     */
    public function testIdComparator($collection, $expected): void
    {
        $obj = new Context(new IdComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        self::assertSame($expected, $firstElement);
    }

    /**
     * @dataProvider provideDates
     * @param $collection
     * @param $expected
     */
    public function testDateComparator($collection, $expected): void
    {
        $obj = new Context(new DateComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        self::assertSame($expected, $firstElement);
    }
}