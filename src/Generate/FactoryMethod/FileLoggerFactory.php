<?php

namespace DesignPattern\Generate\FactoryMethod;

/**
 * Class FileLoggerFactory
 * @package DesignPattern\Generate\FactoryMethod
 */
class FileLoggerFactory implements LoggerFactory
{
    /** @var string $filePath */
    private $filePath;

    /**
     * FileLoggerFactory constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}