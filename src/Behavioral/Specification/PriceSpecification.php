<?php

namespace DesignPattern\Behavioral\Specification;

/**
 * Class PriceSpecification
 * @package DesignPattern\Behavioral\Specification
 */
class PriceSpecification implements Specification
{
    /** @var float|null $minPrice */
    private ?float $minPrice;
    /** @var float|null $maxPrice */
    private ?float $maxPrice;

    /**
     * PriceSpecification constructor.
     * @param float|null $minPrice
     * @param float|null $maxPrice
     */
    public function __construct(?float $minPrice, ?float $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    /**
     * @inheritDoc
     */
    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {
            return false;
        }
        return true;
    }
}
