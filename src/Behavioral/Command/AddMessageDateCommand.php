<?php

namespace DesignPattern\Behavioral\Command;

/**
 * Class AddMessageDateCommand
 * @package DesignPattern\Behavioral\Command
 */
class AddMessageDateCommand implements UndoableCommand
{
    private Receiver $output;

    /**
     * AddMessageDateCommand constructor.
     * @param Receiver $output
     */
    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    public function execute(): void
    {
        $this->output->enableDate();
    }

    public function undo(): void
    {
        $this->output->disableDate();
    }
}
