<?php

namespace DesignPattern\StaticFactory;

/**
 * Class FormatNumber
 * @package DesignPattern\StaticFactory
 */
class FormatNumber implements Formatter
{
    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}