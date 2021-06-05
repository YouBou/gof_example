<?php

namespace DesignPattern\Structural\Decorator\Tests;

use DesignPattern\Structural\Decorator\DoubleRoomBooking;
use DesignPattern\Structural\Decorator\ExtraBed;
use DesignPattern\Structural\Decorator\WiFi;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorTest
 * @package DesignPattern\Structural\Decorator\Tests
 */
class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking(): void
    {
        $booking = new DoubleRoomBooking();

        self::assertSame(40, $booking->calculatePrice());
        self::assertSame('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi(): void
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        self::assertSame(42, $booking->calculatePrice());
        self::assertSame('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed(): void
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        self::assertSame(72, $booking->calculatePrice());
        self::assertSame('double room with wifi with extra bed', $booking->getDescription());
    }
}
