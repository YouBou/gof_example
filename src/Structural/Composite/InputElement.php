<?php

namespace DesignPattern\Structural\Composite;

/**
 * Class InputElement
 * @package DesignPattern\Structural\Composite
 */
class InputElement implements Renderable
{
    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="text" />';
    }
}
