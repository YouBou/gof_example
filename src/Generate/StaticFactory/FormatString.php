<?php

namespace DesignPattern\Generate\StaticFactory;

/**
 * Class FormatString
 * @package DesignPattern\Generate\StaticFactory
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