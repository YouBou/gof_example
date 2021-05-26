<?php declare(strict_types=1);

namespace DesignPattern\AbstractFactory\Tests;

use DesignPattern\AbstractFactory\CsvWriter;
use DesignPattern\AbstractFactory\JsonWriter;
use DesignPattern\AbstractFactory\UnixWriterFactory;
use DesignPattern\AbstractFactory\WinWriterFactory;
use DesignPattern\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        self::assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        self::assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}