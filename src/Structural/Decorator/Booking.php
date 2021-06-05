<?php

namespace DesignPattern\Structural\Decorator;

/**
 * Interface Booking
 * @package DesignPattern\Structural\Decorator
 */
interface Booking
{
    /**
     * @return int
     */
    public function calculatePrice(): int;

    /**
     * @return string
     */
    public function getDescription(): string;
}
