<?php

namespace DesignPattern\Generate\AbstractFactory;

/**
 * Class UnixWriterFactory
 * @package DesignPattern\Generate\AbstractFactory
 */
class UnixWriterFactory implements WriterFactory
{
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}