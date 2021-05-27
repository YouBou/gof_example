<?php

namespace DesignPattern\FactoryMethod;

/**
 * Class StdoutLoggerFactory
 * @package DesignPattern\FactoryMethod
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