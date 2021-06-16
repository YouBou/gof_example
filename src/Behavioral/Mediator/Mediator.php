<?php

namespace DesignPattern\Behavioral\Mediator;

/**
 * Interface Mediator
 * @package DesignPattern\Behavioral\Mediator
 */
interface Mediator
{
    /**
     * @param string $username
     * @return string
     */
    public function getUser(string $username): string;
}
