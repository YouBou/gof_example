<?php

namespace DesignPattern\Behavioral\Observer\Tests;

use DesignPattern\Behavioral\Observer\User;
use DesignPattern\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

/**
 * Class ObserverTest
 * @package DesignPattern\Behavioral\Observer\Tests
 */
class ObserverTest extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified(): void
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        self::assertCount(1, $observer->getChangedUsers());
    }
}
