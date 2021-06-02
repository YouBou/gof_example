<?php

namespace DesignPattern\Structural\Bridge;

/**
 * Class Service
 * @package DesignPattern\Structural\Bridge
 */
abstract class Service
{
    /** @var Formatter $implementation */
    protected $implementation;

    /**
     * Service constructor.
     * @param Formatter $implementation
     */
    public function __construct(Formatter $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @param Formatter $printer
     */
    public function setImplementation(Formatter $printer): void
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}
