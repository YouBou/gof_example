<?php

namespace DesignPattern\Generate\AbstractFactory;

/**
 * Interface WriterFactory
 * @package DesignPattern\Generate\AbstractFactory
 */
interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter(): JsonWriter;
}