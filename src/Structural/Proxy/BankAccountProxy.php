<?php

namespace DesignPattern\Structural\Proxy;

/**
 * Class BankAccountProxy
 * @package DesignPattern\Structural\Proxy
 */
class BankAccountProxy extends HeavyBankAccount
{
    /** @var int|null $balance */
    private ?int $balance = null;

    public function getBalance(): int
    {
        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }

        return $this->balance;
    }
}
