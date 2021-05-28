<?php

namespace DesignPattern\SimpleFactory\Tests;

use DesignPattern\SimpleFactory\Bicycle;
use DesignPattern\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class SimpleFactoryTest
 * @package DesignPattern\SimpleFactory\Tests
 */
class SimpleFactoryTest extends TestCase
{
    /**
     * @return void
     */
    public function testCanCreateBicycle(): void
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $bicycle ->driveTo('Paris');
        self::assertInstanceOf(Bicycle::class, $bicycle);
    }
}
