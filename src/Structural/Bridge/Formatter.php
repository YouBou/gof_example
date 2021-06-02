<?php

namespace DesignPattern\Structural\Bridge;

/**
 * Interface Formatter
 * @package DesignPattern\Structural\Bridge
 */
interface Formatter
{
    /**
     * @param string $text
     * @return string
     */
    public function format(string $text): string;
}
