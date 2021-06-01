<?php

namespace DesignPattern\Generate\FactoryMethod;

/**
 * Class StdoutLogger
 * @package DesignPattern\Generate\FactoryMethod
 */
class StdoutLogger implements Logger
{
    /**
     * @param string $message
     * @return void
     */
    public function log(string $message): void
    {
        echo $message;
    }
}