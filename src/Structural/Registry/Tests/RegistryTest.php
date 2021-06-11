<?php

namespace DesignPattern\Structural\Registry\Tests;

use DesignPattern\Structural\Registry\Service;
use DesignPattern\Structural\Registry\Registry;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * Class RegistryTest
 * @package DesignPattern\Structural\Registry\Tests
 */
class RegistryTest extends TestCase
{
    /** @var Service $service */
    private Service $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetLogger(): void
    {
        Registry::set(Registry::LOGGER, $this->service);

        self::assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Registry::set('foobar', $this->service);
    }

//    public function testThrowsExceptionWhenTryingToGetNotSetKey(): void
//    {
//        $this->expectException(InvalidArgumentException::class);
//
//        Registry::get(Registry::LOGGER);
//    }
}