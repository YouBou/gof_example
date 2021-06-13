<?php

namespace DesignPattern\Behavioral\Command\Tests;

use DesignPattern\Behavioral\Command\HelloCommand;
use DesignPattern\Behavioral\Command\Invoker;
use DesignPattern\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandTest
 * @package DesignPattern\Behavioral\Command\Tests
 */
class CommandTest extends TestCase
{
    public function testInvocation(): void
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        self::assertSame('Hello World', $receiver->getOutput());
    }
}