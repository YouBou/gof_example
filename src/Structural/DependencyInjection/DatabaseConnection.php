<?php

namespace DesignPattern\Structural\DependencyInjection;

/**
 * Class DatabaseConnection
 * @package DesignPattern\Structural\DependencyInjection
 */
class DatabaseConnection
{
    /** @var DatabaseConfiguration $configuration */
    private DatabaseConfiguration $configuration;

    /**
     * DatabaseConnection constructor.
     * @param DatabaseConfiguration $configuration
     */
    public function __construct(DatabaseConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return string
     */
    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
