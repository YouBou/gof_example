<?php

namespace DesignPattern\Generate\SimpleFactory\Tests;

use DesignPattern\Generate\SimpleFactory\Bicycle;
use DesignPattern\Generate\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class SimpleFactoryTest
 * @package DesignPattern\Generate\SimpleFactory\Tests
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
