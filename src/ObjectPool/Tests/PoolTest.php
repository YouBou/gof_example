<?php

namespace DesignPattern\ObjectPool\Tests;

use DesignPattern\ObjectPool\WorkerPool;
use PHPUnit\Framework\TestCase;

/**
 * Class PoolTest
 * @package DesignPattern\ObjectPool\Tests
 */
class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        self::assertCount(2, $pool);
        self::assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        self::assertCount(1, $pool);
        self::assertSame($worker1, $worker2);
    }
}