<?php

namespace DesignPattern\Generate\Prototype;

/**
 * Class BarBookPrototype
 * @package DesignPattern\Generate\Prototype
 */
class BarBookPrototype extends BookPrototype
{
    /** @var string $category */
    protected string $category = 'Bar';

    public function __clone()
    {
    }
}