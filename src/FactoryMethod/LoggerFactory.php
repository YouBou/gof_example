<?php

namespace DesignPattern\FactoryMethod;

/**
 * Interface LoggerFactory
 * @package DesignPattern\FactoryMethod
 */
interface LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger;
}