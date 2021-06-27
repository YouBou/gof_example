<?php

namespace DesignPattern\More\EntityAttributeValue;

use Stringable;

/**
 * Class Value
 * @package DesignPattern\More\EntityAttributeValue
 */
class Value implements Stringable
{
    private Attribute $attribute;
    private string $name;

    /**
     * Value constructor.
     * @param Attribute $attribute
     * @param string $name
     */
    public function __construct(Attribute $attribute, string $name)
    {
        $attribute->addValue($this);
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return sprintf('%s: %s', (string) $this->attribute, $this->name);
    }
}
