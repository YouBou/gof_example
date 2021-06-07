<?php

namespace DesignPattern\Structural\Facade;

/**
 * Class Facade
 * @package DesignPattern\Structural\Facade
 */
class Facade
{
    /** @var Bios $bios */
    private Bios $bios;
    /** @var OperatingSystem $os */
    private OperatingSystem $os;

    /**
     * Facade constructor.
     * @param Bios $bios
     * @param OperatingSystem $os
     */
    public function __construct(Bios $bios, OperatingSystem $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    public function turnOn(): void
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff(): void
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}