<?php


namespace DesignPattern\Behavioral\State;

/**
 * Class StateDone
 * @package DesignPattern\Behavioral\State
 */
class StateDone implements State
{
    public function proceedToNext(OrderContext $context): void
    {

    }

    public function toString(): string
    {
        return 'done';
    }
}
