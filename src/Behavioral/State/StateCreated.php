<?php

namespace DesignPattern\Behavioral\State;

/**
 * Class StateCreated
 * @package DesignPattern\Behavioral\State
 */
class StateCreated implements State
{
    /**
     * @inheritDoc
     */
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new StateShipped());
    }

    public function toString(): string
    {
        return 'created';
    }
}
