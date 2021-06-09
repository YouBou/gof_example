<?php

namespace DesignPattern\Structural\Proxy;

/**
 * Interface BankAccount
 * @package DesignPattern\Structural\Proxy
 */
interface BankAccount
{
    /**
     * @param int $amount
     */
    public function deposit(int $amount): void;

    /**
     * @return int
     */
    public function getBalance(): int;
}
