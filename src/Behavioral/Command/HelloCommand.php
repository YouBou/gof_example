<?php

namespace DesignPattern\Behavioral\Command;

/**
 * Class HelloCommand
 * @package DesignPattern\Behavioral\Command
 */
class HelloCommand implements Command
{
    private Receiver $output;

    /**
     * HelloCommand constructor.
     * @param Receiver $output
     */
    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    public function execute(): void
    {
        $this->output->write('Hello World');
    }
}
