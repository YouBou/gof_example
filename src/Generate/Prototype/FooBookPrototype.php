<?php

namespace DesignPattern\Generate\Prototype;

/**
 * Class FooBookPrototype
 * @package DesignPattern\Generate\Prototype
 */
class FooBookPrototype extends BookPrototype
{
    /** @var string $category */
    protected string $category = 'Foo';

    public function __clone()
    {
    }
}