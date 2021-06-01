<?php


namespace DesignPattern\Generate\AbstractFactory;

/**
 * Class UnixCsvWriter
 * @package DesignPattern\Generate\AbstractFactory
 */
class UnixCsvWriter implements CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string
    {
        return implode(',', $line) . "\n";
    }
}