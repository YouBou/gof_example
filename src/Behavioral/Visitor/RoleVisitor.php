<?php

namespace DesignPattern\Behavioral\Visitor;

/**
 * Interface RoleVisitor
 * @package DesignPattern\Behavioral\Visitor
 */
interface RoleVisitor
{
    /**
     * @param User $role
     */
    public function visitUser(User $role): void;

    /**
     * @param Group $role
     */
    public function visitGroup(Group $role): void;
}
