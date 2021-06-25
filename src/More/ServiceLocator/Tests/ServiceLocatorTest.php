<?php

namespace DesignPattern\More\ServiceLocator\Tests;

use DesignPattern\More\ServiceLocator\LogService;
use DesignPattern\More\ServiceLocator\ServiceLocator;
use PHPUnit\Framework\TestCase;

/**
 * Class ServiceLocatorTest
 * @package DesignPattern\More\ServiceLocator\Tests
 */
class ServiceLocatorTest extends TestCase
{
    private ServiceLocator $serviceLocator;

    public function setUp(): void
    {
        $this->serviceLocator = new ServiceLocator();
    }

    public function testHasServices(): void
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        self::assertTrue($this->serviceLocator->has(LogService::class));
        self::assertFalse($this->serviceLocator->has(self::class));
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet(): void
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        self::assertInstanceOf(LogService::class, $logger);
    }
}