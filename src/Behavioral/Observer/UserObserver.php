<?php

namespace DesignPattern\Behavioral\Observer;

use SplObserver;
use SplSubject;

/**
 * Class UserObserver
 * @package DesignPattern\Behavioral\Observer
 */
class UserObserver implements SplObserver
{
    /** @var SplSubject[] $changeUsers */
    private array $changedUsers = [];

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
