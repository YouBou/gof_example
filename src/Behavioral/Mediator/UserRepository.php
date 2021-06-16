<?php

namespace DesignPattern\Behavioral\Mediator;

/**
 * Class UserRepository
 * @package DesignPattern\Behavioral\Mediator
 */
class UserRepository extends Colleague
{
    /**
     * @param string $user
     * @return string
     */
    public function getUserName(string $user): string
    {
        return 'User: ' . $user;
    }
}
