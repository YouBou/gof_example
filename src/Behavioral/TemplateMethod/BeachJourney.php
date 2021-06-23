<?php

namespace DesignPattern\Behavioral\TemplateMethod;

/**
 * Class BeachJourney
 * @package DesignPattern\Behavioral\TemplateMethod
 */
class BeachJourney extends Journey
{
    /**
     * @inheritDoc
     */
    protected function enjoyVacation(): string
    {
        return "Swimming and sun-bathing";
    }
}
