<?php

namespace DesignPattern\Behavioral\NullObject;

/**
 * Class NullLogger
 * @package DesignPattern\Behavioral\NullObject
 */
class NullLogger implements Logger
{
    /**
     * @param string $str
     */
    public function log(string $str): void
    {
        // do nothing
    }
}
