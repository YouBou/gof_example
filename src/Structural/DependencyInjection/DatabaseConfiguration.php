<?php

namespace DesignPattern\Structural\DependencyInjection;

/**
 * Class DatabaseConfiguration
 * @package DesignPattern\Structural\DependencyInjection
 */
class DatabaseConfiguration
{
    /** @var string $host */
    private string $host;
    /** @var int $port */
    private int $port;
    /** @var string $username */
    private string $username;
    /** @var string $password */
    private string $password;

    /**
     * DatabaseConfiguration constructor.
     * @param string $host
     * @param int $port
     * @param string $username
     * @param string $password
     */
    public function __construct(
        string $host,
        int $port,
        string $username,
        string $password
    ) {
       $this->host = $host;
       $this->port = $port;
       $this->username = $username;
       $this->password = $password;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
