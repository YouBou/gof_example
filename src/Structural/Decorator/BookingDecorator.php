<?php

namespace DesignPattern\Structural\Decorator;

/**
 * Class BookingDecorator
 * @package DesignPattern\Structural\Decorator
 */
abstract class BookingDecorator implements Booking
{
    /** @var Booking $booking */
    protected Booking $booking;

    /**
     * BookingDecorator constructor.
     * @param Booking $booking
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
