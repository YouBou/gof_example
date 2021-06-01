<?php

namespace DesignPattern\Generate\ObjectPool;

/**
 * Class StringReverseWorker
 * @package DesignPattern\Generate\ObjectPool
 */
class StringReverseWorker
{
    /**
     * StringReserveWorker constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $text
     * @return string
     */
    public function run(string $text): string
    {
        return strrev($text);
    }
}