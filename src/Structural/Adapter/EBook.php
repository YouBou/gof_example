<?php

namespace DesignPattern\Structural\Adapter;

/**
 * Interface EBook
 * @package DesignPattern\Structural\Adapter
 */
interface EBook
{
    public function unlock(): void;

    public function pressNext(): void;

    /**
     * @return int[]
     */
    public function getPage(): array;
}
