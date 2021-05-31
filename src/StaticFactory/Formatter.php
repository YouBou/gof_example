<?php

namespace DesignPattern\StaticFactory;

/**
 * Interface Formatter
 * @package DesignPattern\StaticFactory
 */
interface Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string;
}