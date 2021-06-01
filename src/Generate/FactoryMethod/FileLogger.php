<?php

namespace DesignPattern\Generate\FactoryMethod;

/**
 * Class FileLogger
 * @package DesignPattern\Generate\FactoryMethod
 */
class FileLogger implements Logger
{
    /** @var string $filePath */
    private $filePath;

    /**
     * FileLogger constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * @param string $message
     * @return void
     */
    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}