<?php

namespace DesignPattern\Structural\Composite;

/**
 * Class Form
 * @package DesignPattern\Structural\Composite
 */
class Form implements Renderable
{
    /** @var Renderable[] $elements */
    private array $elements;

    /**
     * @return string
     */
    public function render(): string
    {
        $fromCode = '<form>';

        foreach ($this->elements as $element) {
            $fromCode .= $element->render();
        }

        return $fromCode . '</form>';
    }

    /**
     * @param Renderable $element
     */
    public function addElement(Renderable $element): void
    {
        $this->elements[] = $element;
    }
}
