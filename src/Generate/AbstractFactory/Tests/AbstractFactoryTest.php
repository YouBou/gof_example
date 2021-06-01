<?php declare(strict_types=1);

namespace DesignPattern\Generate\AbstractFactory\Tests;

use DesignPattern\Generate\AbstractFactory\CsvWriter;
use DesignPattern\Generate\AbstractFactory\JsonWriter;
use DesignPattern\Generate\AbstractFactory\UnixWriterFactory;
use DesignPattern\Generate\AbstractFactory\WinWriterFactory;
use DesignPattern\Generate\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractFactoryTest
 * @package DesignPattern\Generate\AbstractFactory\Tests
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * @return array
     */
    public function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory): void
    {
        self::assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        self::assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}