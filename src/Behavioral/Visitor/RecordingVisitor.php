<?php

namespace DesignPattern\Behavioral\Visitor;

/**
 * Class RecordingVisitor
 * @package DesignPattern\Behavioral\Visitor
 */
class RecordingVisitor implements RoleVisitor
{
    /** @var Role[] $visited  */
    private array $visited = [];

    /**
     * @inheritDoc
     */
    public function visitGroup(Group $role): void
    {
        $this->visited[] = $role;
    }

    /**
     * @inheritDoc
     */
    public function visitUser(User $role): void
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array
    {
        return $this->visited;
    }
}
