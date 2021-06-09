<?php

namespace DesignPattern\Structural\Flyweight;

/**
 * Class Character
 * @package DesignPattern\Structural\Flyweight
 */
class Character implements Text
{
    /** @var string $name */
    private string $name;

    /**
     * Character constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function render(string $font): string
    {
        return sprintf('Character %s with font %s', $this->name, $font);
    }
}
