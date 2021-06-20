<?php

namespace DesignPattern\Behavioral\Specification;

/**
 * Class OrSpecification
 * @package DesignPattern\Behavioral\Specification
 */
class OrSpecification implements Specification
{
    /** @var Specification[] $specifications */
    private array $specifications;

    /**
     * OrSpecification constructor.
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
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }
        return false;
    }
}