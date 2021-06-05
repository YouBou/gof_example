<?php

namespace DesignPattern\Structural\Decorator;

/**
 * Class DoubleRoomBooking
 * @package DesignPattern\Structural\Decorator
 */
class DoubleRoomBooking implements Booking
{
    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return 40;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'double room';
    }


}
