<?php

namespace DesignPattern\Structural\Composite;

/**
 * Interface Renderable
 * @package DesignPattern\Structural\Composite
 */
interface Renderable
{
    /**
     * @return string
     */
    public function render(): string;
}
