<?php

namespace DesignPattern\AbstractFactory;

/**
 * Class WinCsvWriter
 * @package DesignPattern\AbstractFactory
 */
class WinCsvWriter implements CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string
    {
        return implode(',', $line) . "\r\n";
    }
}