<?php

namespace DesignPattern\Generate\StaticFactory;

/**
 * Interface Formatter
 * @package DesignPattern\Generate\StaticFactory
 */
interface Formatter
{
    /**
     * @param string $input
     * @return string
     */
    public function format(string $input): string;
}