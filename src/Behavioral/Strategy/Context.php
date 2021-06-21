<?php

namespace DesignPattern\Behavioral\Strategy;

/**
 * Class Context
 * @package DesignPattern\Behavioral\Strategy
 */
class Context
{
    private Comparator $comparator;

    /**
     * Context constructor.
     * @param Comparator $comparator
     */
    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * @param array $elements
     * @return array
     */
    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}
