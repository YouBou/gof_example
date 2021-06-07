<?php

namespace DesignPattern\Structural\Facade\Tests;

use DesignPattern\Structural\Facade\Bios;
use DesignPattern\Structural\Facade\Facade;
use DesignPattern\Structural\Facade\OperatingSystem;
use PHPUnit\Framework\TestCase;

/**
 * Class FacadeTest
 * @package DesignPattern\Structural\Facade\Tests
 */
class FacadeTest extends TestCase
{
    public function testComputerOn(): void
    {
        $os = $this->createMock(OperatingSystem::class);

        $os->method('getName')
            ->willReturn('Linux');

        $bios = $this->createMock(Bios::class);

        $bios->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();

        self::assertSame('Linux', $os->getName());
    }
}