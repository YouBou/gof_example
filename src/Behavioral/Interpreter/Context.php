<?php

namespace DesignPattern\Behavioral\Interpreter;

use Exception;

/**
 * Class Context
 * @package DesignPattern\Behavioral\Interpreter
 */
class Context
{
    private array $poolVariable;

    /**
     * @param string $name
     * @return bool
     * @throws Exception
     */
    public function lookUp(string $name): bool
    {
        if (!array_key_exists($name, $this->poolVariable)) {
            throw new Exception("no exist variable: $name");
        }

        return $this->poolVariable[$name];
    }

    /**
     * @param VariableExp $variable
     * @param bool $val
     */
    public function assign(VariableExp $variable, bool $val): void
    {
        $this->poolVariable[$variable->getName()] = $val;
    }
}
