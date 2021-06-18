<?php

namespace DesignPattern\Behavioral\NullObject;

/**
 * Class PrintLogger
 * @package DesignPattern\Behavioral\NullObject
 */
class PrintLogger implements Logger
{
    /**
     * @param string $str
     */
    public function log(string $str): void
    {
        echo $str;
    }
}
