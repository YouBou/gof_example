<?php

namespace DesignPattern\Behavioral\Memento;

/**
 * Class Memento
 * @package DesignPattern\Behavioral\Memento
 */
class Memento
{
    private State $state;

    /**
     * Memento constructor.
     * @param State $state
     */
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}
