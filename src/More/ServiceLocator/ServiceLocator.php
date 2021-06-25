<?php

namespace DesignPattern\More\ServiceLocator;

use OutOfRangeException;
use InvalidArgumentException;

/**
 * Class ServiceLocator
 * @package DesignPattern\More\ServiceLocator
 */
class ServiceLocator implements Service
{
    /** @var string[][] $service */
    private array $services = [];
    /** @var Service[] $instantiated */
    private array $instantiated = [];

    /**
     * @param string $class
     * @param Service $service
     */
    public function addInstance(string $class, Service $service): void
    {
        $this->instantiated[$class] = $service;
    }

    /**
     * @param string $class
     * @param array $params
     */
    public function addClass(string $class, array $params): void
    {
        $this->services[$class] = $params;
    }

    /**
     * @param string $interface
     * @return bool
     */
    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    public function get(string $class): Service
    {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $args = $this->services[$class];

        switch (count($args)) {
            case 0:
                $object = new $class();
                break;
            case 1:
                $object = new $class($args[0]);
                break;
            case 2:
                $object = new $class($args[0], $args[1]);
                break;
            case 3:
                $object = new $class($args[0], $args[1], $args[2]);
                break;
            default:
                throw new OutOfRangeException('Too many arguments given');
        }

        if (!$object instanceof Service) {
            throw new InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instantiated[$class] = $object;

        return $object;
    }
}