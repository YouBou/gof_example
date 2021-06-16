<?php

namespace DesignPattern\Behavioral\Mediator;

/**
 * Class Ui
 * @package DesignPattern\Behavioral\Mediator
 */
class Ui extends Colleague
{
    /**
     * @param string $username
     */
    public function outputUserInfo(string $username): void
    {
        echo $this->mediator->getUser($username);
    }
}
