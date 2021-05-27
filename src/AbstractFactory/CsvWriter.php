<?php


namespace DesignPattern\AbstractFactory;

/**
 * Interface CsvWriter
 * @package DesignPattern\AbstractFactory
 */
interface CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string;
}