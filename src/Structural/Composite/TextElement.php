<?php

namespace DesignPattern\Structural\Composite;

/**
 * Class TextElement
 * @package DesignPattern\Structural\Composite
 */
class TextElement implements Renderable
{
    /** @var string $text */
    private string $text;

    /**
     * TextElement constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->text;
    }
}
