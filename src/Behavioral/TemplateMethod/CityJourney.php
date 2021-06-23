<?php

namespace DesignPattern\Behavioral\TemplateMethod;

/**
 * Class CityJourney
 * @package DesignPattern\Behavioral\TemplateMethod
 */
class CityJourney extends Journey
{
    /**
     * @inheritDoc
     */
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }

    /**
     * @inheritDoc
     */
    protected function buyGift(): ?string
    {
        return "Buy a gift";
    }
}
