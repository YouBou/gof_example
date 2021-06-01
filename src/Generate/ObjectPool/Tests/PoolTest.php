<?php

namespace DesignPattern\Generate\ObjectPool\Tests;

use DesignPattern\Generate\ObjectPool\WorkerPool;
use PHPUnit\Framework\TestCase;

/**
 * Class PoolTest
 * @package DesignPattern\Generate\ObjectPool\Tests
 */
class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet(): void
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        self::assertCount(2, $pool);
        self::assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst(): void
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        self::assertCount(1, $pool);
        self::assertSame($worker1, $worker2);
    }
}