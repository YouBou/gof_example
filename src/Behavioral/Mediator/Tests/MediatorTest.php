<?php

namespace DesignPattern\Behavioral\Mediator\Tests;

use DesignPattern\Behavioral\Mediator\Ui;
use DesignPattern\Behavioral\Mediator\UserRepository;
use DesignPattern\Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

/**
 * Class MediatorTest
 * @package DesignPattern\Behavioral\Mediator\Tests
 */
class MediatorTest extends TestCase
{
    public function testOutputHelloWorld(): void
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}
