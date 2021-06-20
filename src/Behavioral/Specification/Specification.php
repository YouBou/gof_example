<?php

namespace DesignPattern\Behavioral\Specification;

/**
 * Interface Specification
 * @package DesignPattern\Behavioral\Specification
 */
interface Specification
{
    /**
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool;
}
