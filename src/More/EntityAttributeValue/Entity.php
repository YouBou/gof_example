<?php


namespace DesignPattern\More\EntityAttributeValue;

use Stringable;
use SplObjectStorage;

/**
 * Class Entity
 * @package DesignPattern\More\EntityAttributeValue
 */
class Entity implements Stringable
{
    /** @var SplObjectStorage<Value,Value> */
    private $values;
    private string $name;

    /**
     * Entity constructor.
     * @param string $name
     * @param Value[] $values
     */
    public function __construct(string $name, $values)
    {
        $this->values = new SplObjectStorage();
        $this->name = $name;

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return join(', ', $text);
    }
}
