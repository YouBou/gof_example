<?php

namespace DesignPattern\Generate\AbstractFactory;

/**
 * Class WinWriterFactory
 * @package DesignPattern\Generate\AbstractFactory
 */
class WinWriterFactory implements WriterFactory
{
    /**
     * @return CsvWriter
     */
    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    /**
     * @return JsonWriter
     */
    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}