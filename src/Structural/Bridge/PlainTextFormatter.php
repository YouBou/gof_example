<?php

namespace DesignPattern\Structural\Bridge;

/**
 * Class PlainTextFormatter
 * @package DesignPattern\Structural\Bridge
 */
class PlainTextFormatter implements Formatter
{
    /**
     * @param string $text
     * @return string
     */
    public function format(string $text): string
    {
        return $text;
    }
}
