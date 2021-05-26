<?php

namespace DesignPattern\AbstractFactory;

/**
 * Interface JsonWriter
 * @package DesignPattern\AbstractFactory
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