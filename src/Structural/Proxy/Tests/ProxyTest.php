<?php

namespace DesignPattern\Structural\Proxy\Tests;

use DesignPattern\Structural\Proxy\BankAccountProxy;
use PHPUnit\Framework\TestCase;

/**
 * Class ProxyTest
 * @package DesignPattern\Structural\Proxy\Tests
 */
class ProxyTest extends TestCase
{
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce(): void
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        self::assertSame(30, $bankAccount->getBalance());

        $bankAccount->deposit(50);

        self::assertSame(30, $bankAccount->getBalance());
    }
}
