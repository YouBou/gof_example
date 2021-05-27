<?php

namespace DesignPattern\Prototype;

/**
 * Class FooBookPrototype
 * @package DesignPattern\Prototype
 */
class FooBookPrototype extends BookPrototype
{
    /** @var string $category */
    protected string $category = 'Foo';

    public function __clone()
    {
    }
}