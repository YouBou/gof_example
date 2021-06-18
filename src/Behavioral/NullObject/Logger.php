<?php

namespace DesignPattern\Behavioral\NullObject;

/**
 * Interface Logger
 * @package DesignPattern\Behavioral\NullObject
 */
interface Logger
{
    /**
     * @param string $str
     * @return mixed
     */
    public function log(string $str): void;
}
