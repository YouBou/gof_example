<?php

namespace DesignPattern\Behavioral\Visitor;

/**
 * Class Group
 * @package DesignPattern\Behavioral\Visitor
 */
class Group implements Role
{
    private string $name;

    /**
     * Group constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return sprintf('Froup: %s', $this->name);
    }

    /**
     * @inheritDoc
     */
    public function accept(RoleVisitor $visitor): void
    {
        $visitor->visitGroup($this);
    }
}
