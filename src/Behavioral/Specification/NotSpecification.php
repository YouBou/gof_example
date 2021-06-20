<?php

namespace DesignPattern\Behavioral\Specification;

/**
 * Class NotSpecification
 * @package DesignPattern\Behavioral\Specification
 */
class NotSpecification implements Specification
{
    private Specification $specification;

    /**
     * NotSpecification constructor.
     * @param Specification $specification
     */
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * @inheritDoc
     */
    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}