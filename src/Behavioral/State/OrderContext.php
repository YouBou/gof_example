<?php

namespace DesignPattern\Behavioral\State;

/**
 * Class OrderContext
 * @package DesignPattern\Behavioral\State
 */
class OrderContext
{
    private State $state;

    /**
     * @return OrderContext
     */
    public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new StateCreated();

        return $order;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext(): void
    {
        $this->state->proceedToNext($this);
    }

    public function toString(): string
    {
        return $this->state->toString();
    }
}
