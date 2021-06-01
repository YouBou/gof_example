<?php

namespace DesignPattern\Generate\Builder\Tests;

use DesignPattern\Generate\Builder\Parts\Car;
use DesignPattern\Generate\Builder\Parts\Truck;
use DesignPattern\Generate\Builder\CarBuilder;
use DesignPattern\Generate\Builder\Director;
use DesignPattern\Generate\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class DirectorTest
 * @package DesignPattern\Generate\Builder\Tests
 */
class DirectorTest extends TestCase
{
    public function testCanBuildTruck(): void
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        self::assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCarBuilder(): void
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        self::assertInstanceOf(Car::class, $newVehicle);
    }
}