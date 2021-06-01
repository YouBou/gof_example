<?php

namespace DesignPattern\Generate\AbstractFactory;

/**
 * Interface JsonWriter
 * @package DesignPattern\Generate\AbstractFactory
 */
interface JsonWriter
{
    /**
     * @param array $data
     * @param bool $formatted
     * @return string
     */
    public function write(array $data, bool $formatted): string;
}