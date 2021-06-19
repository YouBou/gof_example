<?php

namespace DesignPattern\Behavioral\Observer;

use SplSubject;
use SplObjectStorage;
use SplObserver;

/**
 * Class User
 * @package DesignPattern\Behavioral\Observer
 */
class User implements SplSubject
{
    private SplObjectStorage $observers;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * @param string $email
     */
    public function changeEmail(string $email): void
    {
        $this->notify();
    }

    /**
     * @inheritDoc
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
