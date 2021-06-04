<?php

namespace DesignPattern\Structural\DataMapper;

/**
 * Class User
 * @package DesignPattern\Structural\DataMapper
 */
class User
{
    /** @var string $username */
    private string $username;
    /** @var string $email */
    private string $email;

    /**
     * @param array $state
     * @return User
     */
    public static function fromState(array $state): User
    {
        return new self(
            $state['username'],
            $state['email']
        );
    }

    /**
     * User constructor.
     * @param string $username
     * @param string $email
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
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
    public function getEmail(): string
    {
        return $this->email;
    }
}
