<?php

namespace DesignPattern\Behavioral\Command\Tests;

use DesignPattern\Behavioral\Command\AddMessageDateCommand;
use DesignPattern\Behavioral\Command\HelloCommand;
use DesignPattern\Behavioral\Command\Invoker;
use DesignPattern\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

/**
 * Class UndoableCommandTest
 * @package DesignPattern\Behavioral\Command\Tests
 */
class UndoableCommandTest extends TestCase
{
    public function testInvocation(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        self::assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new AddMessageDateCommand($receiver);
        $messageDateCommand->execute();

        $invoker->run();
        self::assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $messageDateCommand->undo();

        $invoker->run();
        self::assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}