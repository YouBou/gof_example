<?php

namespace DesignPattern\Structural\Facade;

/**
 * Interface Bios
 * @package DesignPattern\Structural\Facade
 */
interface Bios
{
    public function execute(): void;

    public function waitForKeyPress(): void;

    /**
     * @param OperatingSystem $os
     */
    public function launch(OperatingSystem $os): void;

    public function powerDown(): void;
}