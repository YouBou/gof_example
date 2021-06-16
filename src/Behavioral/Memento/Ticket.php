<?php

namespace DesignPattern\Behavioral\Memento;

/**
 * Class Ticket
 * @package DesignPattern\Behavioral\Memento
 */
class Ticket
{
    private State $currentState;

    /**
     * Ticket constructor.
     */
    public function __construct()
    {
        $this->currentState = new State(State::STATE_CREATED);
    }

    public function open(): void
    {
        $this->currentState = new State(State::STATE_OPENED);
    }

    public function assign(): void
    {
        $this->currentState = new State(State::STATE_ASSIGNED);
    }

    public function close(): void
    {
        $this->currentState = new State(State::STATE_CLOSED);
    }

    /**
     * @return Memento
     */
    public function saveToMemento(): Memento
    {
        return new Memento(clone $this->currentState);
    }

    /**
     * @param Memento $memento
     */
    public function restoreFromMemento(Memento $memento): void
    {
        $this->currentState = $memento->getState();
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->currentState;
    }
}
