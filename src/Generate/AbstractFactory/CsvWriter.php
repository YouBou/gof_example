<?php


namespace DesignPattern\Generate\AbstractFactory;

/**
 * Interface CsvWriter
 * @package DesignPattern\Generate\AbstractFactory
 */
interface CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string;
}