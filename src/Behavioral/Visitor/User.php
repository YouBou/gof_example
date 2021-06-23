<?php

namespace DesignPattern\Behavioral\Visitor;

/**
 * Class User
 * @package DesignPattern\Behavioral\Visitor
 */
class User implements Role
{
    private string $name;

    /**
     * User constructor.
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
        return sprintf('User %s', $this->name);
    }

    /**
     * @inheritDoc
     */
    public function accept(RoleVisitor $visitor): void
    {
        $visitor->visitUser($this);
    }
}
