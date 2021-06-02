<?php

namespace DesignPattern\Structural\Bridge;

/**
 * Class PingService
 * @package DesignPattern\Structural\Bridge
 */
class PingService extends Service
{
    /**
     * @return string
     */
    public function get(): string
    {
        return $this->implementation->format('pong');
    }
}
