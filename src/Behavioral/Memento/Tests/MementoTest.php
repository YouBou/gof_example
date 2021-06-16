<?php

namespace DesignPattern\Behavioral\Memento\Tests;

use DesignPattern\Behavioral\Memento\State;
use DesignPattern\Behavioral\Memento\Ticket;
use PHPUnit\Framework\TestCase;

/**
 * Class MementoTest
 * @package DesignPattern\Behavioral\Memento\Tests
 */
class MementoTest extends TestCase
{
    public function testOpenTicketAssignAndSetBackToOpen(): void
    {
        $ticket = new Ticket();

        $ticket->open();
        $openedState = $ticket->getState();
        self::assertSame(State::STATE_OPENED, (string) $ticket->getState());

        $memento = $ticket->saveToMemento();

        $ticket->assign();
        self::assertSame(State::STATE_ASSIGNED, (string) $ticket->getState());

        $ticket->restoreFromMemento($memento);

        self::assertSame(State::STATE_OPENED, (string) $ticket->getState());
        self::assertNotSame($openedState, $ticket->getState());
    }
}
