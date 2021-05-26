<?php

namespace DesignPattern\Builder\Tests;

use DesignPattern\Builder\Parts\Car;
use DesignPattern\Builder\Parts\Truck;
use DesignPattern\Builder\CarBuilder;
use DesignPattern\Builder\Director;
use DesignPattern\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class DirectorTest
 * @package DesignPatter\Builder\Tests
 */
class DirectorTest extends TestCase
{
    public function testCanBuildTruck(): void
    {
        /** @var TruckBuilder $truckBuilder */
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        self::assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCarBuilder(): void
    {
        /** @var CarBuilder $carBuilder */
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        self::assertInstanceOf(Car::class, $newVehicle);
    }
}