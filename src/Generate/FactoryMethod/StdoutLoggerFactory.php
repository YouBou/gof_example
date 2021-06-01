<?php

namespace DesignPattern\Generate\FactoryMethod;

/**
 * Class StdoutLoggerFactory
 * @package DesignPattern\Generate\FactoryMethod
 */
class StdoutLoggerFactory implements LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}