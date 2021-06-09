<?php

namespace DesignPattern\Structural\Flyweight;

use Countable;

/**
 * Class TextFactory
 * @package DesignPattern\Structural\Flyweight
 */
class TextFactory implements Countable
{
    /** @var Text[] $charPool */
    private array $charPool = [];

    /**
     * @param string $name
     * @return Text
     */
    public function get(string $name): Text
    {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    /**
     * @param string $name
     * @return Text
     */
    private function create(string $name): Text
    {
        if (strlen($name) === 1) {
            return new Character($name);
        }

        return new Word($name);
    }

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->charPool);
    }
}
