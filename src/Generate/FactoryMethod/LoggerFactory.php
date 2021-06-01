<?php

namespace DesignPattern\Generate\FactoryMethod;

/**
 * Interface LoggerFactory
 * @package DesignPattern\Generate\FactoryMethod
 */
interface LoggerFactory
{
    /**
     * @return Logger
     */
    public function createLogger(): Logger;
}