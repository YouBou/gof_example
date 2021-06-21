<?php

namespace DesignPattern\Behavioral\Strategy;

/**
 * Class IdComparator
 * @package DesignPattern\Behavioral\Strategy
 */
class IdComparator implements Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}
