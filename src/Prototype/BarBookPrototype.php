<?php

namespace DesignPattern\Prototype;

/**
 * Class BarBookPrototype
 * @package DesignPattern\Prototype
 */
class BarBookPrototype extends BookPrototype
{
    /** @var string $category */
    protected string $category = 'Bar';

    public function __clone()
    {
    }
}