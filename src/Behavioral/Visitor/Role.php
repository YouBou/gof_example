<?php

namespace DesignPattern\Behavioral\Visitor;

/**
 * Interface Role
 * @package DesignPattern\Behavioral\Visitor
 */
interface Role
{
    /**
     * @param RoleVisitor $visitor
     */
    public function accept(RoleVisitor $visitor): void;
}
