<?php

namespace DesignPattern\Behavioral\Interpreter;

/**
 * Class AbstractExp
 * @package DesignPattern\Behavioral\Interpreter
 */
abstract class AbstractExp
{
    /**
     * @param Context $context
     * @return bool
     */
    abstract public function interpret(Context $context): bool;
}
