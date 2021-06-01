<?php

namespace DesignPattern\Structural\Adapter;

/**
 * Interface Book
 * @package DesignPattern\Structural\Adapter
 */
interface Book
{
    public function turnPage(): void;

    public function open(): void;

    public function getPage(): int;
}
