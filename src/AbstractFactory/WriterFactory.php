<?php

namespace DesignPattern\AbstractFactory;

/**
 * Interface WriterFactory
 * @package DesignPattern\AbstractFactory
 */
interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter(): JsonWriter;
}