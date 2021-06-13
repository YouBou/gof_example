<?php

namespace DesignPattern\Behavioral\Command;

/**
 * Interface UndoableCommand
 * @package DesignPattern\Behavioral\Command
 */
interface UndoableCommand extends Command
{
    public function undo(): void;
}
