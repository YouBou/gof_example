<?php

namespace DesignPattern\AbstractFactory;

/**
 * Class WinWriterFactory
 * @package DesignPattern\AbstractFactory
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