<?php

namespace DesignPattern\Behavioral\Command;

/**
 * Class Invoker
 * @package DesignPattern\Behavioral\Command
 */
class Invoker
{
    private Command $command;

    /**
     * @param Command $cmd
     */
    public function setCommand(Command $cmd): void
    {
     $this->command = $cmd;
    }

    public function run(): void
    {
        $this->command->execute();
    }
}
