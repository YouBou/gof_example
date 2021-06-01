<?php

namespace DesignPattern\Generate\StaticFactory;

/**
 * Class FormatNumber
 * @package DesignPattern\Generate\StaticFactory
 */
class FormatNumber implements Formatter
{
    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}