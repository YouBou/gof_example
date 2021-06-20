<?php

namespace DesignPattern\Behavioral\Specification;

/**
 * Class Item
 * @package DesignPattern\Behavioral\Specification
 */
class Item
{
    private float $price;

    /**
     * Item constructor.
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
