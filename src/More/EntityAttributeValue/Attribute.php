<?php


namespace DesignPattern\More\EntityAttributeValue;

use SplObjectStorage;
use Stringable;

/**
 * Class Attribute
 * @package DesignPattern\More\EntityAttributeValue
 */
class Attribute implements Stringable
{
    private SplObjectStorage $values;
    private string $name;

    /**
     * Attribute constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;
    }

    /**
     * @param Value $value
     */
    public function addValue(Value $value): void
    {
        $this->values->attach($value);
    }

    /**
     * @return SplObjectStorage
     */
    public function getValues(): SplObjectStorage
    {
        return $this->values;
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->name;
    }
}