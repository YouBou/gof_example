<?php

namespace DesignPattern\Generate\StaticFactory;

use InvalidArgumentException;

/**
 * Class StaticFactory
 * @package DesignPattern\Generate\StaticFactory
 */
final class StaticFactory
{
    /**
     * @param string $type
     * @return Formatter
     * @throws InvalidArgumentException
     */
    public static function factory(string $type): Formatter
    {
        if ($type === 'number') {
            return new FormatNumber();
        }

        if ($type === 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}