<?php

namespace DesignPattern\Behavioral\Interpreter;

/**
 * Class OrExp
 * @package DesignPattern\Behavioral\Interpreter
 */
class OrExp extends AbstractExp
{
    private AbstractExp $first;
    private AbstractExp $second;

    public function __construct(AbstractExp $first, AbstractExp $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    /**
     * @inheritDoc
     */
    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}
