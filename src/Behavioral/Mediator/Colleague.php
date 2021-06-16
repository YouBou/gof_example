<?php

namespace DesignPattern\Behavioral\Mediator;

/**
 * Class Colleague
 * @package DesignPattern\Behavioral\Mediator
 */
abstract class Colleague
{
    protected Mediator $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}
