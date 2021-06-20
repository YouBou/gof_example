<?php

namespace DesignPattern\Behavioral\Specification\Tests;

use DesignPattern\Behavioral\Specification\AndSpecification;
use DesignPattern\Behavioral\Specification\Item;
use DesignPattern\Behavioral\Specification\NotSpecification;
use DesignPattern\Behavioral\Specification\OrSpecification;
use DesignPattern\Behavioral\Specification\PriceSpecification;
use PHPUnit\Framework\TestCase;

/**
 * Class SpecificationTest
 * @package DesignPattern\Behavioral\Specification\Tests
 */
class SpecificationTest extends TestCase
{
    public function testCanOr(): void
    {
        $spec1 = new PriceSpecification(50,99);
        $spec2 = new PriceSpecification(101, 200);

        $orSpec = new OrSpecification($spec1, $spec2);

        self::assertFalse($orSpec->isSatisfiedBy(new Item(100)));
        self::assertTrue($orSpec->isSatisfiedBy(new Item(51)));
        self::assertTrue($orSpec->isSatisfiedBy(new Item(150)));
    }

    public function testCanAnd(): void
    {
        $spec1 = new PriceSpecification(50, 100);
        $spec2 = new PriceSpecification(80, 200);

        $andSpec = new AndSpecification($spec1, $spec2);

        self::assertFalse($andSpec->isSatisfiedBy(new Item(150)));
        self::assertFalse($andSpec->isSatisfiedBy(new Item(1)));
        self::assertFalse($andSpec->isSatisfiedBy(new Item(51)));
        self::assertTrue($andSpec->isSatisfiedBy(new Item(100)));
    }

    public function testCanNot(): void
    {
        $spec1 = new PriceSpecification(50, 100);
        $notSpec = new NotSpecification($spec1);

        self::assertTrue($notSpec->isSatisfiedBy(new Item(150)));
        self::assertFalse($notSpec->isSatisfiedBy(new Item(50)));
    }
}