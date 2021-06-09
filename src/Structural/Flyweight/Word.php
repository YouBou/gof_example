<?php

namespace DesignPattern\Structural\Flyweight;

/**
 * Class Word
 * @package DesignPattern\Structural\Flyweight
 */
class Word implements Text
{
    /** @var string $name */
    private string $name;

    /**
     * Word constructor.
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
        return sprintf('Word %s with font %s', $this->name, $font);
    }
}
