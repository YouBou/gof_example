<?php

namespace DesignPattern\Behavioral\State;

/**
 * Class StateShipped
 * @package DesignPattern\Behavioral\State
 */
class StateShipped implements State
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new StateDone());
    }

    public function toString(): string
    {
        return 'shipped';
    }
}
