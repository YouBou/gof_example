<?php

namespace DesignPattern\Singleton;

use Exception;

/**
 * Class Singleton
 * @package DesignPattern\Singleton
 */
class Singleton
{
    private static ?Singleton $instance = null;

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    private function __clone()
    {
    }



    /**
     * @throws Exception
     */
    private function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}