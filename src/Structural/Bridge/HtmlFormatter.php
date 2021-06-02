<?php

namespace DesignPattern\Structural\Bridge;

/**
 * Class HtmlFormatter
 * @package DesignPattern\Structural\Bridge
 */
class HtmlFormatter implements Formatter
{
    /**
     * @param string $text
     * @return string
     */
    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}
