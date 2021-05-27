<?php

namespace DesignPattern\FactoryMethod;

/**
 * Class StdoutLogger
 * @package DesignPattern\FactoryMethod
 */
class StdoutLogger implements Logger
{
    /**
     * @param string $message
     * @return void
     */
    public function log(string $message)
    {
        echo $message;
    }
}