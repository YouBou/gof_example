<?php

namespace DesignPattern\StaticFactory;

/**
 * Class FormatString
 * @package DesignPattern\StaticFactory
 */
class FormatString implements Formatter
{
    /**
     * @inheritdoc
     */
    public function format(string $input): string
    {
        return $input;
    }
}