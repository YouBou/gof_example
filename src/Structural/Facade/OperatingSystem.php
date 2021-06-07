<?php

namespace DesignPattern\Structural\Facade;

/**
 * Interface OperatingSystem
 * @package DesignPattern\Structural\Facade
 */
interface OperatingSystem
{
    public function halt(): void;

    /**
     * @return string
     */
    public function getName(): string;
}