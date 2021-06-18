<?php

namespace DesignPattern\Behavioral\NullObject\Tests;

use DesignPattern\Behavioral\NullObject\NullLogger;
use DesignPattern\Behavioral\NullObject\PrintLogger;
use DesignPattern\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

/**
 * Class LoggerTest
 * @package DesignPattern\Behavioral\NullObject\Tests
 */
class LoggerTest extends TestCase
{
    public function testNullObject(): void
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger(): void
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in DesignPattern\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
