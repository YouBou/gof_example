<?php

namespace DesignPattern\Structural\Registry;

use DesignPattern\Structural\Registry\Service;
use InvalidArgumentException;

/**
 * Class Registry
 * @package DesignPattern\Structural\Registry
 */
abstract class Registry
{
    const LOGGER = 'logger';

    /** @var array $services */
    private static array $services = [];

    /** @var string[] $allowedKeys */
    private static array $allowedKeys = [
        self::LOGGER,
    ];

    /**
     * @param string $key
     * @param Service $value
     */
    public static function set(string $key, Service $value): void
    {
        if (!in_array($key, self::$allowedKeys, true)) {
            throw new InvalidArgumentException('Invalid key given');
        }

        self::$services[$key] = $value;
    }

    /**
     * @param string $key
     * @return Service
     */
    public static function get(string $key): Service
    {
        if (!isset(self::$services[$key]) || !in_array($key, self::$allowedKeys)) {
            throw new InvalidArgumentException('Invalid key given');
        }

        return self::$services[$key];
    }
}