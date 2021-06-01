<?php

namespace DesignPattern\Generate\AbstractFactory;

/**
 * Class WinCsvWriter
 * @package DesignPattern\Generate\AbstractFactory
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