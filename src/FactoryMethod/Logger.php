<?php

namespace DesignPattern\FactoryMethod;

/**
 * Interface Logger
 * @package DesignPattern\FactoryMethod
 */
interface Logger
{
    /**
     * @param string $message
     * @return void
     */
    public function log(string $message);
}