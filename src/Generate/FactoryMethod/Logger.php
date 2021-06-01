<?php

namespace DesignPattern\Generate\FactoryMethod;

/**
 * Interface Logger
 * @package DesignPattern\Generate\FactoryMethod
 */
interface Logger
{
    /**
     * @param string $message
     * @return void
     */
    public function log(string $message): void;
}