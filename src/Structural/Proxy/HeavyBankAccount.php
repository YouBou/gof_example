<?php

namespace DesignPattern\Structural\Proxy;

/**
 * Class HeavyBankAccount
 * @package DesignPattern\Structural\Proxy
 */
class HeavyBankAccount implements BankAccount
{
    /** @var int[] $transactions */
    private array $transactions = [];

    /**
     * @inheritDoc
     */
    public function deposit(int $amount): void
    {
        $this->transactions[] = $amount;
    }

    /**
     * @inheritDoc
     */
    public function getBalance(): int
    {
        return array_sum($this->transactions);
    }
}
