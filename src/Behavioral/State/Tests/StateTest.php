<?php

namespace DesignPattern\Behavioral\State\Tests;

use DesignPattern\Behavioral\State\OrderContext;
use PHPUnit\Framework\TestCase;

/**
 * Class StateTest
 * @package DesignPattern\Behavioral\State\Tests
 */
class StateTest extends TestCase
{
    public function testIsCreatedWithStateCreated(): void
    {
        $orderContext = OrderContext::create();

        self::assertSame('created', $orderContext->toString());
    }

    public function testCanProceedToStateShipped(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();

        self::assertSame('shipped', $contextOrder->toString());
    }

    public function testCanProceedToStateDone(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        self::assertSame('done', $contextOrder->toString());
    }

    public function testStateDoneIsTheLastPossibleState(): void
    {
        $contextOrder = OrderContext::create();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();
        $contextOrder->proceedToNext();

        self::assertSame('done', $contextOrder->toString());
    }
}