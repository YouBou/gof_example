<?php

namespace DesignPattern\Generate\FactoryMethod\Tests;

use DesignPattern\Generate\FactoryMethod\FileLogger;
use DesignPattern\Generate\FactoryMethod\FileLoggerFactory;
use DesignPattern\Generate\FactoryMethod\StdoutLogger;
use DesignPattern\Generate\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryMethodTest
 * @package DesignPattern\Generate\FactoryMethod\Tests
 */
class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging(): void
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        self::assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging(): void
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        self::assertInstanceOf(FileLogger::class, $logger);
    }
}