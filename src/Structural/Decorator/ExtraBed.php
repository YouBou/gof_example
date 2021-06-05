<?php

namespace DesignPattern\Structural\Decorator;

/**
 * Class ExtraBed
 * @package DesignPattern\Structural\Decorator
 */
class ExtraBed extends BookingDecorator
{
    private const PRICE = 30;

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}