<?php

namespace DesignPattern\Generate\AbstractFactory;

use JsonException;

/**
 * Class WinJsonWriter
 * @package DesignPattern\Generate\AbstractFactory
 */
class WinJsonWriter implements JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     * @throws JsonException
     */
    public function write(array $data, bool $formatted): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT);
    }
}