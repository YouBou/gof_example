<?php

namespace DesignPattern\Behavioral\NullObject;

/**
 * Class Service
 * @package DesignPattern\Behavioral\NullObject
 */
class Service
{
    private Logger $logger;

    /**
     * Service constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething(): void
    {
        $this->logger->log('We are in '.__METHOD__);
    }
}
