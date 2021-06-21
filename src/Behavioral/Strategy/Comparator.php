<?php

namespace DesignPattern\Behavioral\Strategy;

/**
 * Interface Comparator
 * @package DesignPattern\Behavioral\Strategy
 */
interface Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare($a, $b): int;
}
