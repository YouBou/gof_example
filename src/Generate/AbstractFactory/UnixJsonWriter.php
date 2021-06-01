<?php

namespace DesignPattern\Generate\AbstractFactory;

use JsonException;

/**
 * Class UnixJsonWriter
 * @package DesignPattern\Generate\AbstractFactory
 */
class UnixJsonWriter implements JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     */
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     * @throws JsonException
     */
    public function write(array $data, bool $formatted): string
    {
        $options = 0;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, JSON_THROW_ON_ERROR | $options);
    }
}
