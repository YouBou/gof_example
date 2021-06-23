<?php

namespace DesignPattern\Behavioral\Visitor\Tests;

use DesignPattern\Behavioral\Visitor\Group;
use DesignPattern\Behavioral\Visitor\RecordingVisitor;
use DesignPattern\Behavioral\Visitor\Role;
use DesignPattern\Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

/**
 * Class VisitorTest
 * @package DesignPattern\Behavioral\Visitor\Tests
 */
class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    /**
     * @return array
     */
    public function provideRoles(): array
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role): void
    {
        $role->accept($this->visitor);
        self::assertSame($role, $this->visitor->getVisited()[0]);
    }
}