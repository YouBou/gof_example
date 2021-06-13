<?php

namespace DesignPattern\Behavioral\Interpreter;

/**
 * Class VariableExp
 * @package DesignPattern\Behavioral\Interpreter
 */
class VariableExp extends AbstractExp
{
    private string $name;

    /**
     * VariableExp constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function interpret(Context $context): bool
    {
        return $context->lookUp($this->name);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
