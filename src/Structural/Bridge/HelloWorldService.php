<?php

namespace DesignPattern\Structural\Bridge;

/**
 * Class HelloWorldService
 * @package DesignPattern\Structural\Bridge
 */
class HelloWorldService extends Service
{
    /**
     * @return string
     */
    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}
