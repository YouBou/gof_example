<?php

namespace DesignPattern\Behavioral\Specification;

/**
 * Class AndSpecification
 * @package DesignPattern\Behavioral\Specification
 */
class AndSpecification implements Specification
{
    /** @var Specification[] $specifications */
    private array $specifications;

    /**
     * AndSpecification constructor.
     * @param Specification[] $specifications
     */
    public function __construct(Specification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * @inheritDoc
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }
        return true;
    }
}
